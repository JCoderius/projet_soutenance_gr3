<?php

namespace App\Controller;

use App\Entity\Departements;
use App\Entity\User;
use App\Repository\DepartementsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    /**
     * @Route("/anonyme/{dep}", name="anonyme", methods={"GET"})
     */
    public function show(UserRepository $repousers,DepartementsRepository $repodepartements,$dep)
    {

        $departement = $repodepartements->findOneByNumero($dep);
        if (!$departement)
        {
            return $this->redirectToRoute('defaut');
            // 404
        }
        $users = $departement->getUsers();

        return $this->render('anonyme/index.html.twig', [
            'departement' => $departement,
            'users' => $users,
        ]);
    }


}
