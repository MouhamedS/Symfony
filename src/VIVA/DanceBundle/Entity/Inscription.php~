<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\InscriptionRepository")
 */
class Inscription
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
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Forfait")
     * @ORM\JoinColumn(nullable=true)
     */
    private $forfait;
    
    /**
     * @ORM\OneToOne(targetEntity="VIVA\DanceBundle\Entity\Adherent", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $adherent;
    
    public function __construct() {
        $this->date= new \DateTime();
    }

   
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
     * @return Inscription
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
     * Set etat
     *
     * @param string $etat
     * @return Inscription
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    

    /**
     * Set forfait
     *
     * @param \VIVA\DanceBundle\Entity\Forfait $forfait
     * @return Inscription
     */
    public function setForfait(\VIVA\DanceBundle\Entity\Forfait $forfait)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait
     *
     * @return \VIVA\DanceBundle\Entity\Forfait 
     */
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set adherent
     *
     * @param \VIVA\DanceBundle\Entity\Adherent $adherent
     * @return Inscription
     */
    public function setAdherent(\VIVA\DanceBundle\Entity\Adherent $adherent = null)
    {
        $this->adherent = $adherent;

        return $this;
    }

    /**
     * Get adherent
     *
     * @return \VIVA\DanceBundle\Entity\Adherent 
     */
    public function getAdherent()
    {
        return $this->adherent;
    }
}
