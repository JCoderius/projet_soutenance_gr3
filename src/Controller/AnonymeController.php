<?php

namespace App\Controller;

use App\Entity\Departements;
use App\Entity\User;
use App\Repository\DepartementsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use JasonGrimes\Paginator;

class AnonymeController extends AbstractController
{
    /**
     * @Route("/anonyme/{dep}", name="anonyme", methods={"GET"})
     */
    public function show(UserRepository $repousers, DepartementsRepository $repodepartements, $dep, Request $request, UserRepository $userRepository)
    {
        $departement = $repodepartements->findOneByNumero($dep);
        if (!$departement) {
            throw $this->createNotFoundException('The departement does not exist');
        }
        $users = $departement->getUsers();

        $depalls = $repodepartements->findAll();
//        dd($depalls);

        $totalItems = $userRepository->countUsers();
        $itemsPerPage = 4;
        $currentPage = $request->query->get('page', 1);
        $urlPattern = '?page=(:num)';
        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
        $offset = 0;
        if($currentPage != 1) {
            $offset =  ($itemsPerPage * $currentPage) - $itemsPerPage;
        }

        $users = $userRepository->getAllUsersPaginate($itemsPerPage,$offset);


        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'users'       => $users,
            'depalls'     => $depalls,
            'paginator' =>$paginator
        ]);
    }

    /**
     * @Route("/anonyme2", name="anonyme2", methods={"GET"})
     */
    public function show2(UserRepository $repousers, DepartementsRepository $repodepartements,  Request $request, UserRepository $userRepository)
    {
        $numero = $request->query->get('departement', 1);

        $departement = $repodepartements->findOneByNumero($numero);
        if (!$departement) {

         throw $this->createNotFoundException('The departement does not exist');
        }
        $users = $departement->getUsers();

        $depalls = $repodepartements->findAll();

        $totalItems = $userRepository->countUsers();
        $itemsPerPage = 10;
        $currentPage = $request->query->get('page', 1);
        $urlPattern = '?page=(:num)';
        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
        $offset = 0;
        if($currentPage != 1) {
            $offset =  ($itemsPerPage * $currentPage) - $itemsPerPage;
        }

        $users = $userRepository->getAllUsersPaginate($itemsPerPage,$offset);

        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'users'       => $users,
            'depalls'     => $depalls,
            'paginator' =>$paginator
        ]);
    }

}
