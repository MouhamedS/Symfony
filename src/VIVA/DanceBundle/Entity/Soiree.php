<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soiree
 *
 * @ORM\Table(name="soiree")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\SoireeRepository")
 */
class Soiree
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
     * @ORM\Column(name="date_soiree", type="date")
     */
    private $dateSoiree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time")
     */
    private $heureDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="dresscode", type="string", length=255)
     */
    private $dresscode;

    /**
     * @var int
     *
     * @ORM\Column(name="tarif_soiree", type="smallint")
     */
    private $tarifSoiree;
    
    /**
     * @ORM\ManyToOne(targetEntity="VIVA\DanceBundle\Entity\Lieu")
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
     * Set dateSoiree
     *
     * @param \DateTime $dateSoiree
     * @return Soiree
     */
    public function setDateSoiree($dateSoiree)
    {
        $this->dateSoiree = $dateSoiree;

        return $this;
    }

    /**
     * Get dateSoiree
     *
     * @return \DateTime 
     */
    public function getDateSoiree()
    {
        return $this->dateSoiree;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Soiree
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
     * Set dateFin
     *
     * @param string $dateFin
     * @return Soiree
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dresscode
     *
     * @param string $dresscode
     * @return Soiree
     */
    public function setDresscode($dresscode)
    {
        $this->dresscode = $dresscode;

        return $this;
    }

    /**
     * Get dresscode
     *
     * @return string 
     */
    public function getDresscode()
    {
        return $this->dresscode;
    }

    /**
     * Set tarifSoiree
     *
     * @param integer $tarifSoiree
     * @return Soiree
     */
    public function setTarifSoiree($tarifSoiree)
    {
        $this->tarifSoiree = $tarifSoiree;

        return $this;
    }

    /**
     * Get tarifSoiree
     *
     * @return integer 
     */
    public function getTarifSoiree()
    {
        return $this->tarifSoiree;
    }

    /**
     * Set lieu
     *
     * @param \VIVA\DanceBundle\Entity\Lieu $lieu
     * @return Soiree
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
}
