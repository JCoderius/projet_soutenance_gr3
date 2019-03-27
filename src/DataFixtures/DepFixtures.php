<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Departements;

class DepFixtures extends Fixture
{
    public const DEPARTEMENT_REFERENCE1 = 'dep1';
    public const DEPARTEMENT_REFERENCE2 = 'dep2';
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
        $departement19->setNom('CORRE66E');
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
        $departement48->setNom('LO66ERE');
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

        $departement65 = new Departements();
        $departement65->setNumero('65');
        $departement65->setNom('HAUTES-PYRENEES');
        $manager->persist($departement65);

        $departement66 = new Departements();
        $departement66->setNumero('66');
        $departement66->setNom('PYRENEES-ORIENTALES');
        $manager->persist($departement66);

        $departement67 = new Departements();
        $departement67->setNumero('67');
        $departement67->setNom('BAS-RHIN');
        $manager->persist($departement67);

        $departement68 = new Departements();
        $departement68->setNumero('68');
        $departement68->setNom('HAUT-RHIN');
        $manager->persist($departement68);

        $departement69 = new Departements();
        $departement69->setNumero('69');
        $departement69->setNom('RHONE');
        $manager->persist($departement69);

        $departement70 = new Departements();
        $departement70->setNumero('70');
        $departement70->setNom('HAUTE-SAVOIE');
        $manager->persist($departement70);

        $departement71 = new Departements();
        $departement71->setNumero('71');
        $departement71->setNom('SAONE-ET-LOIRE');
        $manager->persist($departement71);

        $departement72 = new Departements();
        $departement72->setNumero('72');
        $departement72->setNom('SARTHE');
        $manager->persist($departement72);

        $departement73 = new Departements();
        $departement73->setNumero('73');
        $departement73->setNom('SAVOIE');
        $manager->persist($departement73);

        $departement74 = new Departements();
        $departement74->setNumero('74');
        $departement74->setNom('HAUTE-SAVOIE');
        $manager->persist($departement74);

        $departement75 = new Departements();
        $departement75->setNumero('75');
        $departement75->setNom('PARIS');
        $manager->persist($departement75);

        $departement76 = new Departements();
        $departement76->setNumero('76');
        $departement76->setNom('SAINE-MARITIME');
        $manager->persist($departement76);

        $departement77 = new Departements();
        $departement77->setNumero('77');
        $departement77->setNom('SEINE-ET-MARNE');
        $manager->persist($departement77);

        $departement78 = new Departements();
        $departement78->setNumero('78');
        $departement78->setNom('YVELINES');
        $manager->persist($departement78);

        $departement79 = new Departements();
        $departement79->setNumero('79');
        $departement79->setNom('DEUX-SEVRES');
        $manager->persist($departement79);

        $departement80 = new Departements();
        $departement80->setNumero('80');
        $departement80->setNom('SOMME');
        $manager->persist($departement80);

        $departement81 = new Departements();
        $departement81->setNumero('81');
        $departement81->setNom('TARN');
        $manager->persist($departement81);

        $departement82 = new Departements();
        $departement82->setNumero('82');
        $departement82->setNom('TARN-ET-GARONNE');
        $manager->persist($departement82);

        $departement83 = new Departements();
        $departement83->setNumero('83');
        $departement83->setNom('VAR');
        $manager->persist($departement83);

        $departement84 = new Departements();
        $departement84->setNumero('84');
        $departement84->setNom('VAUCLUSE');
        $manager->persist($departement84);

        $departement85 = new Departements();
        $departement85->setNumero('85');
        $departement85->setNom('VENDEE');
        $manager->persist($departement85);

        $departement86 = new Departements();
        $departement86->setNumero('86');
        $departement86->setNom('VIENNE');
        $manager->persist($departement86);

        $departement87 = new Departements();
        $departement87->setNumero('87');
        $departement87->setNom('HAUTE-VIENNE');
        $manager->persist($departement87);

        $departement88 = new Departements();
        $departement88->setNumero('88');
        $departement88->setNom('VOSGES');
        $manager->persist($departement88);

        $departement89 = new Departements();
        $departement89->setNumero('89');
        $departement89->setNom('YONNE');
        $manager->persist($departement89);

        $departement90 = new Departements();
        $departement90->setNumero('90');
        $departement90->setNom('TERRITOIRE-DE-BELFORT');
        $manager->persist($departement90);

        $departement91 = new Departements();
        $departement91->setNumero('91');
        $departement91->setNom('ESSONNE');
        $manager->persist($departement91);

        $departement92 = new Departements();
        $departement92->setNumero('92');
        $departement92->setNom('HAUTS-DE-SEINE');
        $manager->persist($departement92);

        $departement93 = new Departements();
        $departement93->setNumero('93');
        $departement93->setNom('SEINE-SAINT-DENIS');
        $manager->persist($departement93);

        $departement94 = new Departements();
        $departement94->setNumero('94');
        $departement94->setNom('VAL-DE-MARNE');
        $manager->persist($departement94);

        $departement95 = new Departements();
        $departement95->setNumero('95');
        $departement95->setNom('VAL-D\'OISE');
        $manager->persist($departement95);


        $manager->flush();

        $this->addReference(self::DEPARTEMENT_REFERENCE1, $departement27);
        $this->addReference(self::DEPARTEMENT_REFERENCE2, $departement76);
    }
}
