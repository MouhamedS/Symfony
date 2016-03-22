<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regelement_Stage
 *
 * @ORM\Table(name="regelement__stage")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\Regelement_StageRepository")
 */
class Regelement_Stage
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
     * @var int
     *
     * @ORM\Column(name="montant", type="smallint")
     */
    private $montant;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Stagiaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stagiaire;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Stage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stage;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Type_Reglement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type_reglement;


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
     * @return Regelement_Stage
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
     * Set montant
     *
     * @param integer $montant
     * @return Regelement_Stage
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set stagiaire
     *
     * @param \VIVA\DanceBundle\Entity\Stagiaire $stagiaire
     * @return Regelement_Stage
     */
    public function setStagiaire(\VIVA\DanceBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaire = $stagiaire;

        return $this;
    }

    /**
     * Get stagiaire
     *
     * @return \VIVA\DanceBundle\Entity\Stagiaire 
     */
    public function getStagiaire()
    {
        return $this->stagiaire;
    }

    /**
     * Set stage
     *
     * @param \VIVA\DanceBundle\Entity\Stage $stage
     * @return Regelement_Stage
     */
    public function setStage(\VIVA\DanceBundle\Entity\Stage $stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return \VIVA\DanceBundle\Entity\Stage 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set type_reglement
     *
     * @param \VIVA\DanceBundle\Entity\Type_Reglement $typeReglement
     * @return Regelement_Stage
     */
    public function setTypeReglement(\VIVA\DanceBundle\Entity\Type_Reglement $typeReglement)
    {
        $this->type_reglement = $typeReglement;

        return $this;
    }

    /**
     * Get type_reglement
     *
     * @return \VIVA\DanceBundle\Entity\Type_Reglement 
     */
    public function getTypeReglement()
    {
        return $this->type_reglement;
    }
}
