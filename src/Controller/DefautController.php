<?php

namespace App\Controller;

use App\Form\DefautType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DepartementsRepository;

class DefautController extends AbstractController
{
    /**
     * @Route("/", name="defaut")
     */
    public function index(DepartementsRepository $repodepartements)
    {
        $depalls = $repodepartements->findAll();

        return $this->render('defaut/index.html.twig', [
            'depalls' => $depalls,
        ]);
    }
}
