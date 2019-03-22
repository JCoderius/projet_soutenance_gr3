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
        $departement1->setNumero('01');
        $departement1->setNom('AIN');
        $manager->persist($departement1);

        $departement2 = new Departements();
        $departement2->setNumero('02');
        $departement2->setNom('AISNE');
        $manager->persist($departement2);

        $departement3 = new Departements();
        $departement3->setNumero('03');
        $departement3->setNom('ALLIER');
        $manager->persist($departement3);

        $departement4 = new Departements();
        $departement4->setNumero('04');
        $departement4->setNom('ALPES-DE-HAUTE-PROVENCE');
        $manager->persist($departement4);

        $departement5 = new Departements();
        $departement5->setNumero('05');
        $departement5->setNom('HAUTES-ALPES');
        $manager->persist($departement5);

        $departement6 = new Departements();
        $departement6->setNumero('06');
        $departement6->setNom('ALPES-MARITIMES');
        $manager->persist($departement6);

        $departement7 = new Departements();
        $departement7->setNumero('07');
        $departement7->setNom('ARDECHE');
        $manager->persist($departement7);

        $departement8 = new Departements();
        $departement8->setNumero('08');
        $departement8->setNom('ARDENNES');
        $manager->persist($departement8);

        $departement9 = new Departements();
        $departement9->setNumero('09');
        $departement9->setNom('ARIEGE');
        $manager->persist($departement9);

        $departement10 = new Departements();
        $departement10->setNumero('10');
        $departement10->setNom('AUBE');
        $manager->persist($departement10);

        $departement11 = new Departements();
        $departement11->setNumero('11');
        $departement11->setNom('AUDE');
        $manager->persist($departement11);

        $departement12 = new Departements();
        $departement12->setNumero('12');
        $departement12->setNom('AVEYRON');
        $manager->persist($departement12);

        $departement13 = new Departements();
        $departement13->setNumero('13');
        $departement13->setNom('BOUCHES-DU-RHONE');
        $manager->persist($departement13);

        $departement14 = new Departements();
        $departement14->setNumero('14');
        $departement14->setNom('CALVADOS');
        $manager->persist($departement14);

        $departement15 = new Departements();
        $departement15->setNumero('15');
        $departement15->setNom('CANTAL');
        $manager->persist($departement15);

        $departement16 = new Departements();
        $departement16->setNumero('16');
        $departement16->setNom('CHARENTE');
        $manager->persist($departement16);

        $departement17 = new Departements();
        $departement17->setNumero('17');
        $departement17->setNom('CHARENTE-MARITIME');
        $manager->persist($departement17);

        $departement18 = new Departements();
        $departement18->setNumero('18');
        $departement18->setNom('CHER');
        $manager->persist($departement18);

        $departement19 = new Departements();
        $departement19->setNumero('19');
        $departement19->setNom('CORREZE');
        $manager->persist($departement19);

        $departement20 = new Departements();
        $departement20->setNumero('20');
        $departement20->setNom('CORSE');
        $manager->persist($departement20);

        $departement21 = new Departements();
        $departement21->setNumero('21');
        $departement21->setNom('COTE-D\'OR');
        $manager->persist($departement21);

        $departement22 = new Departements();
        $departement22->setNumero('22');
        $departement22->setNom('COTE-D\'ARMOR');
        $manager->persist($departement22);

        $departement23 = new Departements();
        $departement23->setNumero('23');
        $departement23->setNom('CREUSE');
        $manager->persist($departement23);

        $departement24 = new Departements();
        $departement24->setNumero('24');
        $departement24->setNom('DORDOGNE');
        $manager->persist($departement24);

        $departement25 = new Departements();
        $departement25->setNumero('25');
        $departement25->setNom('DOUBS');
        $manager->persist($departement25);

        $departement26 = new Departements();
        $departement26->setNumero('26');
        $departement26->setNom('DROME');
        $manager->persist($departement26);

        $departement27 = new Departements();
        $departement27->setNumero('27');
        $departement27->setNom('EURE');
        $manager->persist($departement27);

        $departement28 = new Departements();
        $departement28->setNumero('28');
        $departement28->setNom('EURE-ET-LOIR');
        $manager->persist($departement28);

        $departement29 = new Departements();
        $departement29->setNumero('29');
        $departement29->setNom('FINISTERE');
        $manager->persist($departement29);

        $departement30 = new Departements();
        $departement30->setNumero('30');
        $departement30->setNom('GARD');
        $manager->persist($departement30);

        $departement31 = new Departements();
        $departement31->setNumero('31');
        $departement31->setNom('HAUTE-GARONNE');
        $manager->persist($departement31);

        $departement32 = new Departements();
        $departement32->setNumero('32');
        $departement32->setNom('GERS');
        $manager->persist($departement32);

        $departement33 = new Departements();
        $departement33->setNumero('33');
        $departement33->setNom('GIRONDE');
        $manager->persist($departement33);

        $departement34 = new Departements();
        $departement34->setNumero('34');
        $departement34->setNom('HERAULT');
        $manager->persist($departement34);

        $departement35 = new Departements();
        $departement35->setNumero('35');
        $departement35->setNom('ILLE-ET-VILAINE');
        $manager->persist($departement35);

        $departement36 = new Departements();
        $departement36->setNumero('36');
        $departement36->setNom('INDRE');
        $manager->persist($departement36);

        $departement37 = new Departements();
        $departement37->setNumero('37');
        $departement37->setNom('INDRE-ET-LOIRE');
        $manager->persist($departement37);

        $departement38 = new Departements();
        $departement38->setNumero('38');
        $departement38->setNom('ISERE');
        $manager->persist($departement38);

        $departement39 = new Departements();
        $departement39->setNumero('39');
        $departement39->setNom('JURA');
        $manager->persist($departement39);

        $departement40 = new Departements();
        $departement40->setNumero('40');
        $departement40->setNom('LANDES');
        $manager->persist($departement40);

        $departement41 = new Departements();
        $departement41->setNumero('41');
        $departement41->setNom('LOIR-ET-CHER');
        $manager->persist($departement41);

        $departement42 = new Departements();
        $departement42->setNumero('42');
        $departement42->setNom('LOIRE');
        $manager->persist($departement42);

        $departement43 = new Departements();
        $departement43->setNumero('43');
        $departement43->setNom('LOIRE-ATLANTIQUE');
        $manager->persist($departement43);

        $departement44 = new Departements();
        $departement44->setNumero('44');
        $departement44->setNom('LOIRE-ATLANTIQUE');
        $manager->persist($departement44);

        $departement45 = new Departements();
        $departement45->setNumero('45');
        $departement45->setNom('LOIRET');
        $manager->persist($departement45);

        $departement46 = new Departements();
        $departement46->setNumero('46');
        $departement46->setNom('LOT');
        $manager->persist($departement46);

        $departement47 = new Departements();
        $departement47->setNumero('47');
        $departement47->setNom('LOT-ET-GARONNE');
        $manager->persist($departement47);

        $departement48 = new Departements();
        $departement48->setNumero('48');
        $departement48->setNom('LOZERE');
        $manager->persist($departement48);

        $departement49 = new Departements();
        $departement49->setNumero('49');
        $departement49->setNom('MAINE-ET-LOIRE');
        $manager->persist($departement49);

        $departement50 = new Departements();
        $departement50->setNumero('50');
        $departement50->setNom('MANCHE');
        $manager->persist($departement50);

        $departement51 = new Departements();
        $departement51->setNumero('51');
        $departement51->setNom('MARNE');
        $manager->persist($departement51);

        $departement52 = new Departements();
        $departement52->setNumero('52');
        $departement52->setNom('HAUTE-MARNE');
        $manager->persist($departement52);

        $departement53 = new Departements();
        $departement53->setNumero('53');
        $departement53->setNom('MAYENNE');
        $manager->persist($departement53);

        $departement54 = new Departements();
        $departement54->setNumero('54');
        $departement54->setNom('MEURTHE-ET-MOSELLE');
        $manager->persist($departement54);

        $departement55 = new Departements();
        $departement55->setNumero('55');
        $departement55->setNom('MEUSE');
        $manager->persist($departement55);

        $departement56 = new Departements();
        $departement56->setNumero('56');
        $departement56->setNom('MORBIHAN');
        $manager->persist($departement56);

        $departement57 = new Departements();
        $departement57->setNumero('57');
        $departement57->setNom('MOSELLE');
        $manager->persist($departement57);

        $departement58 = new Departements();
        $departement58->setNumero('58');
        $departement58->setNom('NIEVRE');
        $manager->persist($departement58);

        $departement59 = new Departements();
        $departement59->setNumero('59');
        $departement59->setNom('NORD');
        $manager->persist($departement59);

        $departement60 = new Departements();
        $departement60->setNumero('60');
        $departement60->setNom('OISE');
        $manager->persist($departement60);

        $departement61 = new Departements();
        $departement61->setNumero('61');
        $departement61->setNom('ORNE');
        $manager->persist($departement61);

        $departement62 = new Departements();
        $departement62->setNumero('62');
        $departement62->setNom('PAS-DE-CALAIS');
        $manager->persist($departement62);

        $departement63 = new Departements();
        $departement63->setNumero('63');
        $departement63->setNom('PUI-DE-DOME');
        $manager->persist($departement63);

        $departement64 = new Departements();
        $departement64->setNumero('64');
        $departement64->setNom('PYRENEES-ATLANTIQUES');
        $manager->persist($departement64);


        $manager->flush();
    }
}
