<?php

namespace VIVA\DanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity(repositoryClass="VIVA\DanceBundle\Repository\LieuRepository")
 */
class Lieu
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_rue", type="smallint")
     */
    private $numeroRue;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_lieu", type="string", length=255)
     */
    private $rueLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="cplieu", type="smallint")
     */
    private $cplieu;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


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
     * Set nom
     *
     * @param string $nom
     * @return Lieu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set numeroRue
     *
     * @param integer $numeroRue
     * @return Lieu
     */
    public function setNumeroRue($numeroRue)
    {
        $this->numeroRue = $numeroRue;

        return $this;
    }

    /**
     * Get numeroRue
     *
     * @return integer 
     */
    public function getNumeroRue()
    {
        return $this->numeroRue;
    }

    /**
     * Set rueLieu
     *
     * @param string $rueLieu
     * @return Lieu
     */
    public function setRueLieu($rueLieu)
    {
        $this->rueLieu = $rueLieu;

        return $this;
    }

    /**
     * Get rueLieu
     *
     * @return string 
     */
    public function getRueLieu()
    {
        return $this->rueLieu;
    }

    /**
     * Set cplieu
     *
     * @param string $cplieu
     * @return Lieu
     */
    public function setCplieu($cplieu)
    {
        $this->cplieu = $cplieu;

        return $this;
    }

    /**
     * Get cplieu
     *
     * @return string 
     */
    public function getCplieu()
    {
        return $this->cplieu;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Lieu
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
}
