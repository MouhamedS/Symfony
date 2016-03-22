<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Forfait
 *
 * @ORM\Table(name="forfait")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\ForfaitRepository")
 */
class Forfait
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
     * @var string
     *
     * @ORM\Column(name="libelle_forfait", type="string", length=255)
     */
    private $libelleForfait;

    /**
     * @var int
     *
     * @ORM\Column(name="tarif_forfait", type="integer")
     */
    private $tarifForfait;
    
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
     * Set libelleForfait
     *
     * @param string $libelleForfait
     * @return Forfait
     */
    public function setLibelleForfait($libelleForfait)
    {
        $this->libelleForfait = $libelleForfait;

        return $this;
    }

    /**
     * Get libelleForfait
     *
     * @return string 
     */
    public function getLibelleForfait()
    {
        return $this->libelleForfait;
    }

    /**
     * Set tarifForfait
     *
     * @param integer $tarifForfait
     * @return Forfait
     */
    public function setTarifForfait($tarifForfait)
    {
        $this->tarifForfait = $tarifForfait;

        return $this;
    }

    /**
     * Get tarifForfait
     *
     * @return integer 
     */
    public function getTarifForfait()
    {
        return $this->tarifForfait;
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
     * @return Forfait
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
