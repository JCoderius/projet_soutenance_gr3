<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORY_REFERENCE1 = 'cat1';
    public const CATEGORY_REFERENCE2 = 'cat2';
    public const CATEGORY_REFERENCE3 = 'cat3';
    public const CATEGORY_REFERENCE4 = 'cat4';
    public const CATEGORY_REFERENCE5 = 'cat5';
    public const CATEGORY_REFERENCE6 = 'cat6';
    public const CATEGORY_REFERENCE7 = 'cat7';
    public const CATEGORY_REFERENCE8 = 'cat8';
    public const CATEGORY_REFERENCE9 = 'cat9';
    public const CATEGORY_REFERENCE10 = 'cat10';
    public const CATEGORY_REFERENCE11 = 'cat11';
    public const CATEGORY_REFERENCE12 = 'cat12';
    public const CATEGORY_REFERENCE13 = 'cat13';
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

        $this->addReference(self::CATEGORY_REFERENCE1, $category1);
        $this->addReference(self::CATEGORY_REFERENCE2, $category2);
        $this->addReference(self::CATEGORY_REFERENCE3, $category3);
        $this->addReference(self::CATEGORY_REFERENCE4, $category4);
        $this->addReference(self::CATEGORY_REFERENCE5, $category5);
        $this->addReference(self::CATEGORY_REFERENCE6, $category6);
        $this->addReference(self::CATEGORY_REFERENCE7, $category7);
        $this->addReference(self::CATEGORY_REFERENCE8, $category8);
        $this->addReference(self::CATEGORY_REFERENCE9, $category9);
        $this->addReference(self::CATEGORY_REFERENCE10, $category10);
        $this->addReference(self::CATEGORY_REFERENCE11, $category11);
        $this->addReference(self::CATEGORY_REFERENCE12, $category12);
        $this->addReference(self::CATEGORY_REFERENCE13, $category13);
    }
}
