<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefautController extends AbstractController
{
    /**
     * @Route("/", name="anonyme")
     */
    public function index()
    {
        return $this->render('anonyme/index.html.twig', [
            'controller_name' => 'DefautController',
        ]);
    }
}
