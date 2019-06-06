<?php
namespace App\DataFixtures;

use App\DataFixtures\DepFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Category;
use App\DataFixtures\CategoryFixtures;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    private $passwordEncoder;
    private $tokenGenerator;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder,TokenGeneratorInterface $tokenGenerator)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->tokenGenerator = $tokenGenerator;
    }
    public function load(ObjectManager $manager)
    {
        ////////////////////////
        /////// USER ///////////
        ////////////////////////
        $user1 = new User();
        $user1->setEmail('admin@admin.fr');
        $user1->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));
        $user1->setPassword($this->passwordEncoder->encodePassword($user1, 'admin'));
        $user1->setToken($this->tokenGenerator->generateToken());
        $user1->setLastname('Plastique');
        $user1->setFirstname('Bertrand');
        $user1->setPhone('0606060606');
        $user1->setAdress('Lieu-dit Le Virage');
        $user1->setCp('27530');
        $user1->setVille('Routot');
        // $user1->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        // $user1->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE1));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('user@user.fr');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setPassword($this->passwordEncoder->encodePassword($user2, 'user'));
        $user2->setToken($this->tokenGenerator->generateToken());
        $user2->setTitle('La Ferme Dupont');
        $user2->setLastname('Dupont');
        $user2->setFirstname('Albert');
        $user2->setDescription('Nous vous proposont différents légumes de saison, pommes de terre, carottes, navets, choux et salades.');
        $user2->setSiret('12345678900000');
        $user2->setPhone('0611111111');
        $user2->setAdress('Le Paradis');
        $user2->setCp('27300');
        $user2->setVille('Routot');
        $user2->setImages('legumes_01.jpg');
        $user2->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user2->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE2));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('quidelantoine@gmail.com');
        $user3->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));
        $user3->setPassword($this->passwordEncoder->encodePassword($user3, 'michel'));
        $user3->setToken($this->tokenGenerator->generateToken());
        $user3->setLastname('Quidel');
        $user3->setFirstname('Antoine');
        $user3->setPhone('0623456789');
        $user3->setAdress('Les coteaux des champs');
        $user3->setCp('76600');
        $user3->setVille('Le Havre');
        // $user3->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE2));
        // $user3->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE2));
        $manager->persist($user3);

        $user4 = new User();
        $user4->setEmail('jprenaut@gmail.fr');
        $user4->setRoles(array('ROLE_USER'));
        $user4->setPassword($this->passwordEncoder->encodePassword($user4, 'user4'));
        $user4->setToken($this->tokenGenerator->generateToken());
        $user4->setTitle('La Ferme Renaut');
        $user4->setLastname('Renaut');
        $user4->setFirstname('Jean-Pierre');
        $user4->setDescription('Les plus grandes variétés de fraises vous seront proposées à la cuillette ou en barquettes de 1, 2 et 5 Kg.');
        $user4->setSiret('12563268456856');
        $user4->setPhone('0629563584');
        $user4->setAdress('Chemin des Varets');
        $user4->setCp('27500');
        $user4->setVille('Pont-Audemer');
        $user4->setImages('fruits_01.jpg');
        $user4->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user4->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE1));
        $manager->persist($user4);

        $user5 = new User();
        $user5->setEmail('laboucheriecauchoise@orange.fr');
        $user5->setRoles(array('ROLE_USER'));
        $user5->setPassword($this->passwordEncoder->encodePassword($user5, 'user5'));
        $user5->setToken($this->tokenGenerator->generateToken());
        $user5->setTitle('La Boucherie Cauchoise');
        $user5->setLastname('Morin');
        $user5->setFirstname('Daniel');
        $user5->setDescription('Viande de boeuf de qualité et ventes en détails pour les particuliers.');
        $user5->setSiret('12846932547563');
        $user5->setPhone('0695847563');
        $user5->setAdress('Allée des jonquilles');
        $user5->setCp('76360');
        $user5->setVille('Etretat');
        $user5->setImages('eleveurs_01.jpg');
        $user5->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE2));
        $user5->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE3));
        $manager->persist($user5);

        $user6 = new User();
        $user6->setEmail('moureaux.virginie@yahoo.fr');
        $user6->setRoles(array('ROLE_USER'));
        $user6->setPassword($this->passwordEncoder->encodePassword($user6, 'user6'));
        $user6->setToken($this->tokenGenerator->generateToken());
        $user6->setTitle('Charcuterie du Roumois');
        $user6->setLastname('Moureaux');
        $user6->setFirstname('Virginie');
        $user6->setDescription('Vente de plats de charcuteries divers et variés.');
        $user6->setSiret('11236595632512');
        $user6->setPhone('0652143263');
        $user6->setAdress('Rue de la république');
        $user6->setCp('27350');
        $user6->setVille('Routot');
        $user6->setImages('charcuterie_04.jpg');
        $user6->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user6->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE4));
        $manager->persist($user6);

        $user7 = new User();
        $user7->setEmail('leprevert@gmail.fr');
        $user7->setRoles(array('ROLE_USER'));
        $user7->setPassword($this->passwordEncoder->encodePassword($user7, 'user7'));
        $user7->setToken($this->tokenGenerator->generateToken());
        $user7->setTitle('La ferme du pré vert');
        $user7->setLastname('Dépré');
        $user7->setFirstname('Pascal');
        $user7->setDescription('Vente de lait en gros et détails.');
        $user7->setSiret('15632659856325');
        $user7->setPhone('0658213624');
        $user7->setAdress('La bréhallerie');
        $user7->setCp('27500');
        $user7->setVille('Corneville sur Risle');
        $user7->setImages('produits_laitier_01.jpg');
        $user7->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user7->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE5));
        $manager->persist($user7);

        $user8 = new User();
        $user8->setEmail('desmaraissylvain@hotmail.fr');
        $user8->setRoles(array('ROLE_USER'));
        $user8->setPassword($this->passwordEncoder->encodePassword($user8, 'user8'));
        $user8->setToken($this->tokenGenerator->generateToken());
        $user8->setTitle('Desmarais SARL');
        $user8->setLastname('Desmarais');
        $user8->setFirstname('Sylvain');
        $user8->setDescription('Tout un assortiment de biscuits et gateaux composés de produits locaux sont à votre disposition dans notre espace de vente.');
        $user8->setSiret('11254865236598');
        $user8->setPhone('0236528475');
        $user8->setAdress('Le cantelou');
        $user8->setCp('27210');
        $user8->setVille('Foulbec');
        $user8->setImages('douceurs_sucrees_01.jpg');
        $user8->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user8->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE6));
        $manager->persist($user8);


        // for ($i = 1; $i < 20; $i++) {
        //     $user = new User();
        //     $user->setEmail('user' . $i . '@user' . $i . '.fr');
        //     $user->setRoles(array('ROLE_USER'));
        //     $user->setPassword($this->passwordEncoder->encodePassword($user, 'user' . $i));
        //     $user->setTitle('La ferme Durand'.$i);
        //     $user->setLastname('Durand'.$i);
        //     $user->setFirstname('Francois'.$i);
        //     $user->setDescription('Nous vous proposons différents produits de la ferme');
        //     $user->setSiret('12345678900000');
        //     $user->setPhone('0600010203');
        //     $user->setAdress('La briqueterie');
        //     $user->setCp('27500');
        //     $user->setVille('Manneville');
        //     $user->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        //     $user->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE3));
        //     $manager->persist($user);
            $manager->flush();
        // }
    }
    public function getDependencies()
    {
        return array(
            DepFixtures::class,
        );
    }
}
