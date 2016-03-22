<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Stage
 *
 * @ORM\Table(name="stage")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\StageRepository")
 */
class Stage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time")
     */
    private $heureFin;

    /**
     * @var int
     *
     * @ORM\Column(name="tarif_stage", type="smallint")
     */
    private $tarifStage;

    /**
     * @var string
     *
     * @ORM\Column(name="plafond", type="string", length=255)
     */
    private $plafond;

    /**
     * @var string
     *
     * @ORM\Column(name="seuil_viabilite", type="string", length=255)
     */
    private $seuilViabilite;

    /**
     * @var string
     *
     * @ORM\Column(name="delai_preinscription", type="date")
     */
    private $delaiPreinscription;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="smallint")
     */
    private $montant;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Salle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Dance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dance;
    
    /**
     * @ORM\ManyToMany(targetEntity="VIVA\DanceBundle\Entity\Professeur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $professeurs;
    
     /**
     * @ORM\ManyToMany(targetEntity="VIVA\DanceBundle\Entity\Stagiaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stagiaire;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Stage
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Stage
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Stage
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set tarifStage
     *
     * @param integer $tarifStage
     * @return Stage
     */
    public function setTarifStage($tarifStage)
    {
        $this->tarifStage = $tarifStage;

        return $this;
    }

    /**
     * Get tarifStage
     *
     * @return integer 
     */
    public function getTarifStage()
    {
        return $this->tarifStage;
    }

    /**
     * Set plafond
     *
     * @param string $plafond
     * @return Stage
     */
    public function setPlafond($plafond)
    {
        $this->plafond = $plafond;

        return $this;
    }

    /**
     * Get plafond
     *
     * @return string 
     */
    public function getPlafond()
    {
        return $this->plafond;
    }

    /**
     * Set seuilViabilite
     *
     * @param string $seuilViabilite
     * @return Stage
     */
    public function setSeuilViabilite($seuilViabilite)
    {
        $this->seuilViabilite = $seuilViabilite;

        return $this;
    }

    /**
     * Get seuilViabilite
     *
     * @return string 
     */
    public function getSeuilViabilite()
    {
        return $this->seuilViabilite;
    }

    /**
     * Set delaiPreinscription
     *
     * @param string $delaiPreinscription
     * @return Stage
     */
    public function setDelaiPreinscription($delaiPreinscription)
    {
        $this->delaiPreinscription = $delaiPreinscription;

        return $this;
    }

    /**
     * Get delaiPreinscription
     *
     * @return string 
     */
    public function getDelaiPreinscription()
    {
        return $this->delaiPreinscription;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Stage
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set salle
     *
     * @param \VIVA\DanceBundle\Entity\Salle $salle
     * @return Stage
     */
    public function setSalle(\VIVA\DanceBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \VIVA\DanceBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set dance
     *
     * @param \VIVA\DanceBundle\Entity\Dance $dance
     * @return Stage
     */
    public function setDance(\VIVA\DanceBundle\Entity\Dance $dance)
    {
        $this->dance = $dance;

        return $this;
    }

    /**
     * Get dance
     *
     * @return \VIVA\DanceBundle\Entity\Dance 
     */
    public function getDance()
    {
        return $this->dance;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->professeurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add professeurs
     *
     * @param \VIVA\DanceBundle\Entity\Professeur $professeurs
     * @return Stage
     */
    public function addProfesseur(\VIVA\DanceBundle\Entity\Professeur $professeurs)
    {
        $this->professeurs[] = $professeurs;

        return $this;
    }

    /**
     * Remove professeurs
     *
     * @param \VIVA\DanceBundle\Entity\Professeur $professeurs
     */
    public function removeProfesseur(\VIVA\DanceBundle\Entity\Professeur $professeurs)
    {
        $this->professeurs->removeElement($professeurs);
    }

    /**
     * Get professeurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesseurs()
    {
        return $this->professeurs;
    }

    /**
     * Add stagiaire
     *
     * @param \VIVA\DanceBundle\Entity\Stagiaire $stagiaire
     * @return Stage
     */
    public function addStagiaire(\VIVA\DanceBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaire[] = $stagiaire;

        return $this;
    }

    /**
     * Remove stagiaire
     *
     * @param \VIVA\DanceBundle\Entity\Stagiaire $stagiaire
     */
    public function removeStagiaire(\VIVA\DanceBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaire->removeElement($stagiaire);
    }

    /**
     * Get stagiaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStagiaire()
    {
        return $this->stagiaire;
    }
}
