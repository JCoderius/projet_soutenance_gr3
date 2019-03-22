<?php

namespace App\DataFixtures;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Departements;
class DepFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $departement1 = new Departements();
        $departement1->setNumero('O1');
        $departement1->setNom('AIN');
        $manager->persist($departement1);

        $manager->flush();

        $departement2 = new Departements();
        $departement2->setNumero('O2');
        $departement2->setNom('AISNE');
        $manager->persist($departement2);

        $manager->flush();
    }
}
