<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VIVA\DanceBundle\Entity\Professeur;

class LoadProfesseur implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
   $prof1=new Professeur();
   $prof1->setNom('Poitier');
   $prof1->setPrenom('Guy');
   $prof1->setAdresse('9 rue de  la loire');
    
   $prof2=new Professeur();
   $prof2->setNom('Paul');
   $prof2->setPrenom('Philippe');
   $prof2->setAdresse('10 rue de la loire');
   
   $manager->persist($prof1);
   $manager->persist($prof2);   

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}