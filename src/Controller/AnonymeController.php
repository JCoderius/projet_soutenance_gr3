<?php

namespace App\Controller;

use App\Entity\Departements;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    /**
     * @Route("/anonyme/{dep}", name="anonyme", methods={"GET"})
     */
    public function show(Departements $dep)
    {
        dd($dep);
        return $this->render('anonyme/index.html.twig', [
            'dep' => $dep,
        ]);
    }

}
