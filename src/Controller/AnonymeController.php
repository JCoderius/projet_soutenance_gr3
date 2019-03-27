<?php

namespace App\Controller;

use App\Entity\Departements;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    public function listing(UserRepository $users)
    {
        return $this->render('anonyme/index.html.twig', [
            'users' => $users->findAll(),
        ]);
    }


}
