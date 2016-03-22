<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace VIVA\DanceBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;// pour les instacier les class controller
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;// à ne pas oublier pour les request
use Symfony\Component\HttpFoundation\RedirectResponse; // N'oubliez pas ce use pour les redirections
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;// pour le Not Found
use VIVA\DanceBundle\Entity\Inscription;    
use VIVA\DanceBundle\Entity\Adherent;
use VIVA\DanceBundle\Entity\Forfait;
use VIVA\DanceBundle\Entity\Dance;
use VIVA\DanceBundle\Form\InscriptionType;
use VIVA\DanceBundle\Entity\Professeur;

class DanceController extends Controller{
    
    public function indexAction($page) {
        
        
        if($page<1){
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }
        
        $em= $this->getDoctrine()->getManager();
        
        $listProfesseurs = $em
                ->getRepository('VIVADanceBundle:Professeur')
                ->findAll();
        $listDances =  $em
                ->getRepository('VIVADanceBundle:Dance')
                ->findAll();
        
        return $this->render('VIVADanceBundle:Dance:index.html.twig', array(
                'listProfesseurs' => $listProfesseurs,
                'listDances'     => $listDances
                ));
        
    }
    
    public function inscriptAction(Request $request) {
        
                
     $inscription= new Inscription();
     
     //entity manager
     $em = $this->getDoctrine()->getManager();
     
     
     //on genere le formulaire
     $form = $this
             ->get('form.factory')
             ->create(new InscriptionType(),$inscription);
     
     // lien entre request et formulaire
     $form->handleRequest($request);
     
      if ($form->isValid()) {
         
       
      
// On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($inscription);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Inscription bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('viva_dance_home'));
    }
    
    return $this->render('VIVADanceBundle:Dance:inscription.html.twig', array(
        'form' => $form->createView()
            ));
}

public function coursAction() {
    
    
    
    return $this->render('VIVADanceBundle:Dance:cours.html.twig');
}

public function stageAction() {
 
    return $this->render('VIVADanceBundle:Dance:stage.html.twig');
}

public function galerieAction() {
    
    return $this->render('VIVADanceBundle:Dance:galerie.html.twig');
}

public function actuAction() {
 
     return $this->render('VIVADanceBundle:Dance:actualites.html.twig');
}
}
