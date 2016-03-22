<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pratique
 *
 * @ORM\Table(name="pratique")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\PratiqueRepository")
 */
class Pratique
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
    private $dance;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Soiree")
     * @ORM\JoinColumn(nullable=false)
     */
    private $soiree;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Salle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;

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
     * Set dance
     *
     * @param \VIVA\DanceBundle\Entity\Dance $dance
     * @return Pratique
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
     * Set soiree
     *
     * @param \VIVA\DanceBundle\Entity\Soiree $soiree
     * @return Pratique
     */
    public function setSoiree(\VIVA\DanceBundle\Entity\Soiree $soiree)
    {
        $this->soiree = $soiree;

        return $this;
    }

    /**
     * Get soiree
     *
     * @return \VIVA\DanceBundle\Entity\Soiree 
     */
    public function getSoiree()
    {
        return $this->soiree;
    }

    /**
     * Set salle
     *
     * @param \VIVA\DanceBundle\Entity\Salle $salle
     * @return Pratique
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
}
