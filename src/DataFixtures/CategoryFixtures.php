<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    
       $category1 = new Category();
       $category1->setProduit('Fruits');
       $manager->persist($category1);

       $category2 = new Category();
       $category2->setProduit('Légumes');
       $manager->persist($category2);

       $category3 = new Category();
       $category3->setProduit('Viandes');
       $manager->persist($category3);

       $category4 = new Category();
       $category4->setProduit('Charcuterie');
       $manager->persist($category4);

       $category5 = new Category();
       $category5->setProduit('Produits laitiers');
       $manager->persist($category5);

       $category6 = new Category();
       $category6->setProduit('Douceurs sucrées');
       $manager->persist($category6);

       $category7 = new Category();
       $category7->setProduit('Epiceries & condiments');
       $manager->persist($category7);

       $category8 = new Category();
       $category8->setProduit('Produits Biologiques');
       $manager->persist($category8);

       $category9 = new Category();
       $category9->setProduit('Oeufs');
       $manager->persist($category9);

       $category10 = new Category();
       $category10->setProduit('Miel');
       $manager->persist($category10);

       $category11 = new Category();
       $category11->setProduit('Boissons alcoolisées');
       $manager->persist($category11);

       $category12 = new Category();
       $category12->setProduit('Boissons non-alcoolisées');
       $manager->persist($category12);

       $category13 = new Category();
       $category13->setProduit('Autres');
       $manager->persist($category13);

       $manager->flush();
    }
}
