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
    public function show(DepartementsRepository $repodepartements, $dep, Request $request, UserRepository $userRepository)
    {
        $departement = $repodepartements->findOneByNumero($dep);
        if (!$departement) {
            throw $this->createNotFoundException('The departement does not exist');
        }

        $depalls = $repodepartements->findAll();
//        dd($depalls);

        $users = $departement ->getUsers();


        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'users'       => $users,
            'depalls'     => $depalls
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

        $users = $departement ->getUsers();

        $depalls = $repodepartements->findAll();

        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'users'       => $users,
            'depalls'     => $depalls
        ]);
    }

}
