<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VIVA\DanceBundle\Entity\Dance;

class LoadDance implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $noms = array(
      'Kizomba',
      'Batchata',
      'Salsa',
      'Zumba'
      
    );
   

    foreach ($noms as $name ) {
      // On crée la catégorie
      $forfait = new Dance();
      $forfait->setNom($name);

      // On la persiste
      $manager->persist($forfait);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}