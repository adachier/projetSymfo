<?php

namespace App\DataFixtures;

use App\Entity\Mineral;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $mineral = new Mineral();
        $mineral
            -> setName('Tourmaline Rubellite')
            -> setTitle('Tourmaline')
            -> setContinent('Amérique du Sud')
            -> setPays('Brésil')
            -> setRegion('Minas Gerais')
            -> setMine('Mine de Jonas')
            -> setGps('19°12\'02" S - 41°26\'36\" W')
            -> setPrice(false);
        $manager -> persist($mineral);
        // $product = new Product();
        // $manager->persist($product);

        $mineral2 = new Mineral();
        $mineral2
            -> setName('Béryl')
            -> setTitle('Béryl')
            -> setContinent('Amérique du Nord')
            -> setPays('Etats-Unis')
            -> setRegion('Utah')
            -> setMine('Wah Wah Mountains')
            -> setGps('38°26\'03" N - 113°33\'46\" W')
            -> setPrice(false);
        $manager -> persist($mineral2);

        $mineral3 = new Mineral();
        $mineral3
            -> setName('Rhodochrosite')
            -> setTitle('Rhodochrosite')
            -> setContinent('Amérique du Sud')
            -> setPays('Perou')
            -> setRegion('Cordillère Raura')
            -> setMine('Uchucchaua')
            -> setGps('10°37\'26" S - 76°41\'19\" W')
            -> setPrice(false);
        $manager -> persist($mineral3);

        $mineral4 = new Mineral();
        $mineral4
            -> setName('Spinel')
            -> setTitle('Spinel')
            -> setContinent('Asie du Sud')
            -> setPays('Birmanie')
            -> setRegion('Mogok')
            -> setMine(false)
            -> setGps('22°57\'35" N - 96°30\'13\" E')
            -> setPrice(false);
        $manager -> persist($mineral4);

        $manager->flush();
    }
}
