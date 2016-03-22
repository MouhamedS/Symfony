<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\SaisonRepository")
 */
class Saison
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
     * @var int
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="tarif", type="integer")
     */
    private $tarif;
    
    /**
     * @ORM\ManyToMany(targetEntity="VIVA\DanceBundle\Entity\Dance", cascade={"persist"})
     */
    private $dances;


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
     * Set annee
     *
     * @param integer $annee
     * @return Saison
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set tarif
     *
     * @param integer $tarif
     * @return Saison
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return integer 
     */
    public function getTarif()
    {
        return $this->tarif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dances = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dances
     *
     * @param \VIVA\DanceBundle\Entity\Dance $dances
     * @return Saison
     */
    public function addDance(\VIVA\DanceBundle\Entity\Dance $dances)
    {
        $this->dances[] = $dances;

        return $this;
    }

    /**
     * Remove dances
     *
     * @param \VIVA\DanceBundle\Entity\Dance $dances
     */
    public function removeDance(\VIVA\DanceBundle\Entity\Dance $dances)
    {
        $this->dances->removeElement($dances);
    }

    /**
     * Get dances
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDances()
    {
        return $this->dances;
    }
}
