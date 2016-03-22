<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * NiveauChoisi
 *
 * @ORM\Table(name="niveau_choisi")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\NiveauChoisiRepository")
 */
class NiveauChoisi
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
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Dance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dances;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Inscription")
     * @ORM\JoinColumn(nullable=false)
     */
    private $inscription;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Niveau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $niveau;


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
     * Set dances
     *
     * @param \VIVA\DanceBundle\Entity\Dance $dances
     * @return NiveauChoisi
     */
    public function setDances(\VIVA\DanceBundle\Entity\Dance $dances)
    {
        $this->dances = $dances;

        return $this;
    }

    /**
     * Get dances
     *
     * @return \VIVA\DanceBundle\Entity\Dance 
     */
    public function getDances()
    {
        return $this->dances;
    }

    /**
     * Set inscription
     *
     * @param \VIVA\DanceBundle\Entity\Inscription $inscription
     * @return NiveauChoisi
     */
    public function setInscription(\VIVA\DanceBundle\Entity\Inscription $inscription)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return \VIVA\DanceBundle\Entity\Inscription 
     */
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set niveau
     *
     * @param \VIVA\DanceBundle\Entity\Niveau $niveau
     * @return NiveauChoisi
     */
    public function setNiveau(\VIVA\DanceBundle\Entity\Niveau $niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \VIVA\DanceBundle\Entity\Niveau 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
