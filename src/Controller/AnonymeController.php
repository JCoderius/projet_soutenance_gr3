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
public function show(DepartementsRepository $repodepartements, $dep, Request $request, UserRepository $userRepository): Response
    {
        $departement = $repodepartements->findOneByNumero($dep);
        $departement = $repodepartements->findOneByNumero($dep);
        if (!$departement) {
            throw $this->createNotFoundException('The departement does not exist');
        }

        $users = $departement->getUsers();
        
        $depalls = $repodepartements->findAll();

        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'depalls'     => $repodepartements->findAll(),
            'users' => $users,
        ]);
    }

    /**
     * @Route("/anonyme2", name="anonyme2", methods={"GET"})
     */
    public function show2(DepartementsRepository $repodepartements, Request $request): Response
    {
        $numero = $request->query->get('departement', 1);

        $departement = $repodepartements->findOneByNumero($numero);
        if (!$departement) {

            throw $this->createNotFoundException('The departement does not exist');
        }

        $depalls = $repodepartements->findAll();
        return $this->render('anonyme/index.html.twig', [
            'users'       => $departement ->getUsers(),
            'departement' => $departement,
            'depalls'     => $depalls,
        ]);
    }

}
