<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            ]);
    }

    /**
    * @Route("/logout", name="app_logout", methods={"GET"})
    */
   public function logout()
   {
       // controller can be blank: it will never be executed!
       throw new \Exception('Don\'t forget to activate logout in security.yaml');
   }

   /**
   * @Route("/forgottenpassword", name="app_forgotten_password")
   */
   public function forgottenPassword(
        Request $request,
        UserPasswordEncoderInterface $encoder,
        \Swift_Mailer $mailer,
        TokenGeneratorInterface $tokenGenerator
    ): Response
   {

       if ($request->isMethod('POST')) {

           $email = $request->request->get('email');

           $entityManager = $this->getDoctrine()->getManager();
           $user = $entityManager->getRepository(User::class)->findOneByEmail($email);
           /* @var $user User */

           if ($user === null) {
               $this->addFlash('danger', 'Email Inconnu');
               return $this->redirectToRoute('defaut');
           }
           $token = $tokenGenerator->generateToken();

           try{
               $user->setToken($token);
               $entityManager->flush();
           } catch (\Exception $e) {
               $this->addFlash('warning', $e->getMessage());
               return $this->redirectToRoute('defaut');
           }

           $url = $this->generateUrl('app_reset_password', array('token' => $token,'email'=> $email), UrlGeneratorInterface::ABSOLUTE_URL);
           $message = (new \Swift_Message('Forgot Password'))
               ->setFrom('quidelantoinr@gmail.com')
               ->setTo($user->getEmail())
               ->setBody(
                   'cliquer ici pour modifier votre mot de passe : <a href="' . $url . '">'.$url.'</a>',
                   'text/html'
               );

           $mailer->send($message);
           $this->addFlash('notice', 'Mail envoyé');

           //return $this->redirectToRoute('defaut');
       }

       return $this->render('security/forgotten_password.html.twig');
    }

    /**
     * @Route("/reset_password/{token}/{email}", name="app_reset_password")
     */
    public function resetPassword(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder,$email)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneByToken($token);
        if ($user === null && $user->getEmail() != $email) {
            $this->addFlash('danger', 'Token Inconnu');
            return $this->redirectToRoute('defaut');
        }
        if ($request->isMethod('POST')) {
            $user->setToken('');
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager->flush();
            $this->addFlash('notice', 'Mot de passe mis à jour');
            return $this->redirectToRoute('defaut');
        }
        return $this->render('security/reset_password.html.twig', [
            'token' => $token,
            ]);
    }
}
