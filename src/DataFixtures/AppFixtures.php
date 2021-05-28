<?php

namespace App\DataFixtures;
use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $usuario = new Usuario('Juan', 'Garcia','garciaj@gmail.com','pepe');
        $manager->persist($usuario);
        $manager->flush();
        $usuario2 = new Usuario('Alicia', 'Gomez','aligo@gmail.com','pepa');
        $manager->persist($usuario2);
        $manager->flush(); 
        $usuario3 = new Usuario('Fernanda', 'Frias','frias@gmail.com','pipa');
        $manager->persist($usuario3);
        $manager->flush();
        $usuario4 = new Usuario('Gustavo', 'Baez','baezg@hotmail.com','pipo');
        $manager->persist($usuario4);
        $manager->flush();
    }
}
