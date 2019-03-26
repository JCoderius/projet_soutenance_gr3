<?php

namespace App\Controller;

use App\Entity\Departements;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    /**
     * @Route("/anonyme/{dep}", name="anonyme", methods={"GET"})
     */
    public function show(Departements $dep)
    {
//        dd($dep);
        if (!$dep)
        {
            return $this->redirectToRoute('defaut');
        }
        return $this->render('anonyme/index.html.twig', [
            'dep' => $dep,
        ]);
    }

    public function listing(User $user): Response
    {
        return $this->render('anonyme/index.html.twig', [
            'user' => $user,
        ]);
    }

}
