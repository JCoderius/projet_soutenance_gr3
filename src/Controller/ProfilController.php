<?php

namespace App\Controller;

use App\Form\ProfilType;
use App\Service\HelperProfil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        if(!$user) {
            throw $this->createNotFoundException('The user does not exist');
        }
        $stats = $profil->statistiques($user);
//        dd($stats);

        // Faire service pour calculez le pourcentage de profil remplit
        $form = $this->createForm(ProfilType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $file = $user->getImages();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $fileName);
            $user->setImages($fileName);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Your changes were saved!'
            );
           return $this->redirectToRoute('profil');
        }

        return $this->render('profil/index.html.twig', [
            'user' => $user,
            'stats' => $stats,
            'form' => $form->createView(),
        ]);
    }
}
