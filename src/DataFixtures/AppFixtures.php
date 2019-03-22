<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
<<<<<<< HEAD
        // $product = new Product();
        // $manager->persist($product);
=======
        ////////////////////////
        /////// USER ///////////
        ////////////////////////
        $user1 = new User();
        $user1->setEmail('admin@admin.fr');
        $user1->setRoles(array('ROLE_USER','ROLE_ADMIN'));
        $user1->setPassword($this->passwordEncoder->encodePassword($user1,'admin'));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('user@user.fr');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setPassword($this->passwordEncoder->encodePassword($user2,'user'));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('quidelantoine@gmail.com');
        $user3->setRoles(array('ROLE_USER','ROLE_ADMIN'));
        $user3->setPassword($this->passwordEncoder->encodePassword($user1,'michel'));
        $manager->persist($user3);

        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);

        for ($i = 1; $i < 20; $i++) {
            $user = new User();
            $user->setEmail('user'.$i.'@user'.$i.'.fr');
            $user->setRoles(array('ROLE_USER'));
            $user->setPassword($this->passwordEncoder->encodePassword($user,'user'.$i));
            $manager->persist($user);
        }
>>>>>>> 84c19a601a2c7a4ba182637d2a3f55f639e7ce4f

        $manager->flush();
    }
}
