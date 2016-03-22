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
     * @ORM\OneToOne(targetEntity="VIVA\DanceBundle\Entity\Lieu")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lieu;
    
    /**
     * @ORM\OneToOne(targetEntity="VIVA\DanceBundle\Entity\Lieu")
     * @ORM\JoinColumn(nullable=true)
     */
    private $lieu_1;
    
    /**
     * @ORM\OneToOne(targetEntity="VIVA\DanceBundle\Entity\Lieu")
     * @ORM\JoinColumn(nullable=true)
     */
    private $lieu_2;
    


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
     * Set lieu
     *
     * @param \VIVA\DanceBundle\Entity\Lieu $lieu
     * @return Salle
     */
    public function setLieu(\VIVA\DanceBundle\Entity\Lieu $lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return \VIVA\DanceBundle\Entity\Lieu 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set lieu_1
     *
     * @param \VIVA\DanceBundle\Entity\Lieu $lieu1
     * @return Salle
     */
    public function setLieu1(\VIVA\DanceBundle\Entity\Lieu $lieu1 = null)
    {
        $this->lieu_1 = $lieu1;

        return $this;
    }

    /**
     * Get lieu_1
     *
     * @return \VIVA\DanceBundle\Entity\Lieu 
     */
    public function getLieu1()
    {
        return $this->lieu_1;
    }

    /**
     * Set lieu_2
     *
     * @param \VIVA\DanceBundle\Entity\Lieu $lieu2
     * @return Salle
     */
    public function setLieu2(\VIVA\DanceBundle\Entity\Lieu $lieu2 = null)
    {
        $this->lieu_2 = $lieu2;

        return $this;
    }

    /**
     * Get lieu_2
     *
     * @return \VIVA\DanceBundle\Entity\Lieu 
     */
    public function getLieu2()
    {   
        return $this->lieu_2;
    }
}
