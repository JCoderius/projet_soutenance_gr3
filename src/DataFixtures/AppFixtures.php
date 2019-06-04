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
        $user1->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user1->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE1));
        $manager->persist($user1);
        $user2 = new User();
        $user2->setEmail('user@user.fr');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setPassword($this->passwordEncoder->encodePassword($user2, 'user'));
        $user2->setToken($this->tokenGenerator->generateToken());
        $user2->setLastname('Dupont');
        $user2->setFirstname('Albert');
        $user2->setSiret('12345678900000');
        $user2->setPhone('0611111111');
        $user2->setAdress('Le Paradis');
        $user2->setCp('27300');
        $user2->setVille('Routot');
        $user2->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
        $user2->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE2));
        $manager->persist($user2);
        $user3 = new User();
        $user3->setEmail('quidelantoine@gmail.com');
        $user3->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));
        $user3->setPassword($this->passwordEncoder->encodePassword($user3, 'michel'));
        $user3->setToken($this->tokenGenerator->generateToken());
        $user3->setLastname('Martin');
        $user3->setFirstname('Renaud');
        $user3->setPhone('0623456789');
        $user3->setAdress('Les coteaux');
        $user3->setCp('76650');
        $user3->setVille('Hauville');
        $user3->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE2));
        $user3->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE2));
        $manager->persist($user3);
        for ($i = 1; $i < 20; $i++) {
            $user = new User();
            $user->setEmail('user' . $i . '@user' . $i . '.fr');
            $user->setRoles(array('ROLE_USER'));
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'user' . $i));
            $user->setLastname('Durand'.$i);
            $user->setFirstname('Francois'.$i);
            $user->setSiret('12345678900000');
            $user->setPhone('0600010203');
            $user->setAdress('La briqueterie');
            $user->setCp('27500');
            $user->setVille('Manneville');
            $user->setDepId($this->getReference(DepFixtures::DEPARTEMENT_REFERENCE1));
            $user->addCat($this->getReference(CategoryFixtures::CATEGORY_REFERENCE3));
            $manager->persist($user);
            $manager->flush();
        }
    }
    public function getDependencies()
    {
        return array(
            DepFixtures::class,
        );
    }
}
