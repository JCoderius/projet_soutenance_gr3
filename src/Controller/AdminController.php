<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\DepartementsRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(UserRepository $userRepository, DepartementsRepository $depRepository, CategoryRepository $prodRepository, Request $request): Response
    {
        // producteur inscrits à ce jour
          $producteurs = $userRepository->countUsers();

        // producteurs dans le departement 27
          $producteurs_du_27 = $userRepository->countUsersFromThisDep('27');

        // Nombres de departements listés
          $departements = $depRepository->countDepartements();

          $produits = $prodRepository->countProduits();

          $cats = $prodRepository->findAll();

          $tetes = $userRepository->findAll();

        return $this->render('admin/index.html.twig', [
           'producteurs' => $producteurs,
           'producteurs_du_27' => $producteurs_du_27,
           'departements' => $departements,
           'produits' => $produits,
           'cats' => $cats,
           'tetes' => $tetes
        ]);
    }
}
