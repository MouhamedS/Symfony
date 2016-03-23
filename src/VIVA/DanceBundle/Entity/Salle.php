<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="nom_salle", type="string", length=255)
     */
    private $nomSalle;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;
    
    /**
     * @ORM\ManyToMany(targetEntity="VIVA\DanceBundle\Entity\Lieu")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lieu;
    
   
    


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
     * Set nomSalle
     *
     * @param string $nomSalle
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string 
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

   

   

  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lieu = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lieu
     *
     * @param \VIVA\DanceBundle\Entity\Lieu $lieu
     * @return Salle
     */
    public function addLieu(\VIVA\DanceBundle\Entity\Lieu $lieu)
    {
        $this->lieu[] = $lieu;

        return $this;
    }

    /**
     * Remove lieu
     *
     * @param \VIVA\DanceBundle\Entity\Lieu $lieu
     */
    public function removeLieu(\VIVA\DanceBundle\Entity\Lieu $lieu)
    {
        $this->lieu->removeElement($lieu);
    }

    /**
     * Get lieu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLieu()
    {
        return $this->lieu;
    }
}
