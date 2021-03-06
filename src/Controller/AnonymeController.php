<?php

namespace App\Controller;

use App\Entity\Departements;
use App\Entity\User;
use App\Repository\DepartementsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use JasonGrimes\Paginator;

class AnonymeController extends AbstractController
{
    /**
     * @Route("/anonyme/{dep}", name="anonyme", methods={"GET"})
     */
    public function show(DepartementsRepository $repoDepartements,UserRepository $repoUser, $dep, Request $request): Response
    {

        $itemsPerPage = 6;
        $departement = $repoDepartements->findOneByNumero($dep);
        if (!$departement) {
            throw $this->createNotFoundException('The departement does not exist');
        }
        $page = $request->query->get('page', 1);
        $offset = ($page - 1) * $itemsPerPage;

        $users = $repoUser->getUserPaginate($dep,$itemsPerPage,$offset);

        $useralls = $departement->getUsers();
        $totalItems = $repoUser->countUsersFromThisDep($dep);

        $currentPage = $request->query->get('page', 1);
        $urlPattern = '?page=(:num)';
        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
        // helper form


        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'depalls'     => $repoDepartements->findAll(),
            'users' => $users,
            'paginator' => $paginator
        ]);
    }

    /**
     * @Route("/anonyme2", name="anonyme2", methods={"GET"})
     */
    public function show2(DepartementsRepository $repodepartements, UserRepository $repoUser, Request $request): Response
    {
        $itemsPerPage = 6;
        $dep = $request->query->get('departement', 1);
       //dd($dep);
        $departement = $repodepartements->findOneByNumero($dep);
        if (!$departement) {

            throw $this->createNotFoundException('The departement does not exist');
        }

        $page = $request->query->get('page', 1);
        $offset = ($page - 1) * $itemsPerPage;
        //dd($departement);

        $users = $repoUser->getUserPaginate($dep, $itemsPerPage, $offset);
        $useralls = $departement->getUsers();
        $totalItems = $repoUser->countUsersFromThisDep($dep);
        //dd($users);
        $currentPage = $request->query->get('page', 1);
        //on concatène afin de garder un mémoire qu'on est sur ce departement
        $urlPattern = '?departement='.$dep.'&page=(:num)';

        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
       //dd($users);
       $depalls =  $repodepartements->findAll();

        return $this->render('anonyme/index.html.twig', [
            'users'       => $users,
            'departement' => $departement,
            'depalls'     => $depalls,
            'paginator' => $paginator
        ]);
    }
}
