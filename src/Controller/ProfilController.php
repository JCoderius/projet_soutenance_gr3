<?php

namespace App\Controller;

use App\Form\ProfilType;
use App\Service\HelperProfil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(Request $request,HelperProfil $profil)
    {
        $user = $this->getUser();
        //dd($user);
        // A revoir
            // utilisateur est sensé etre conncté ici, cela ne sert à rien ce que tu fait en, dessous !!!!
        // if(!$user) {
        //     throw $this->createNotFoundException('The user does not exist');
        // }
        $stats = $profil->statistiques($user);
        $userfile = $user->getImages();

        // Faire service pour calculez le pourcentage de profil remplit
        $form = $this->createForm(ProfilType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('images')->getData();
            //$file = $user->getImages();
            if($file instanceof UploadedFile) {
              $fileName = md5(uniqid()).'.'.$file->guessExtension();
              $file->move($this->getParameter('upload_directory'), $fileName);
              $user->setImages($fileName);
            } else {
              $user->setImages($userfile);
            }

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                'Vos changements ont été enregistrés!'
            );
           return $this->redirectToRoute('profil');
        } else {
          $user->setImages($userfile);
        }

        return $this->render('profil/index.html.twig', [
            'user' => $user,
            'stats' => $stats,
            'form' => $form->createView(),
        ]);
    }
}
