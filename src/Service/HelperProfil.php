<?php
namespace App\Service;

class HelperProfil
{
    public function statistiques($user)
    {
        //foreach ($user as $key => $value) {
        //dd($user);
//        }
        $score = 0;
        if(!empty($user->getEmail())) { $score++; }
        if(!empty($user->getLastname())) { $score++; }
        if(!empty($user->getFirstname())) { $score++; }
        if(!empty($user->getSiret())) { $score++; }
        if(!empty($user->getPhone())) { $score++; }
        if(!empty($user->getTitle())) { $score++; }
        if(!empty($user->getDescription())) { $score++; }
        if(!empty($user->getAdress())) { $score++; }
        if(!empty($user->getHoraire())) { $score++; }
        if(!empty($user->getCategory())) { $score++; }
        if(!empty($user->getVille())) { $score++; }
        if(!empty($user->getSite())) { $score++; }
        if(!empty($user->getCp())) { $score++; }
        if(!empty($user->getDepId())) { $score++; }
        if(!empty($user->getCat())) { $score++; }

        $total = 13;

        return round(($score/ $total) * 100);
    }
}
