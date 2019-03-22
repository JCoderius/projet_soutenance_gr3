<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProducteurController extends AbstractController
{
    /**
     * @Route("/producteur", name="producteur")
     */
    public function index()
    {
        return $this->render('producteur/index.html.twig', [
            'controller_name' => 'ProducteurController',
        ]);
    }
    
}
