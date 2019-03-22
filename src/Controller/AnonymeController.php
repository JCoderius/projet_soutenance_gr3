<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    /**
     * @Route("/anonyme/{dep}", name="anonyme")
     */
    public function index(int $dep)
    {

        die($dep);
        return $this->render('anonyme/index.html.twig', [
            'controller_name' => 'AnonymeController',
        ]);
    }
}
