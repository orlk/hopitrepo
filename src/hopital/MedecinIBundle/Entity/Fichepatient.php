<?php

namespace hopital\MedecinIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichepatient
 *
 * @ORM\Table(name="fichepatient", indexes={@ORM\Index(name="codeDm", columns={"codeDm"})})
 * @ORM\Entity
 */
class Fichepatient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="poid", type="float", precision=10, scale=0, nullable=false)
     */
    private $poid;

    /**
     * @var float
     *
     * @ORM\Column(name="tension", type="float", precision=10, scale=0, nullable=false)
     */
    private $tension;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=false)
     */
    private $temperature;

    /**
     * @var float
     *
     * @ORM\Column(name="perimetre", type="float", precision=10, scale=0, nullable=false)
     */
    private $perimetre;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe_sanguin", type="string", length=30, nullable=false)
     */
    private $groupeSanguin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $datecreation ;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=false)
     */
    private $remarque;

    /**
     * @var \Dossiermedical
     *
     * @ORM\ManyToOne(targetEntity="Dossiermedical")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeDm", referencedColumnName="codeDm")
     * })
     */
    private $codedm;



    /**
     * Get numFiche
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set taille
     *
     * @param float $taille
     * @return Fichepatient
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return float 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poid
     *
     * @param float $poid
     * @return Fichepatient
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return float 
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set tension
     *
     * @param float $tension
     * @return Fichepatient
     */
    public function setTension($tension)
    {
        $this->tension = $tension;

        return $this;
    }

    /**
     * Get tension
     *
     * @return float 
     */
    public function getTension()
    {
        return $this->tension;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     * @return Fichepatient
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set perimetre
     *
     * @param float $perimetre
     * @return Fichepatient
     */
    public function setPerimetre($perimetre)
    {
        $this->perimetre = $perimetre;

        return $this;
    }

    /**
     * Get perimetre
     *
     * @return float 
     */
    public function getPerimetre()
    {
        return $this->perimetre;
    }

    /**
     * Set groupeSanguin
     *
     * @param string $groupeSanguin
     * @return Fichepatient
     */
    public function setGroupeSanguin($groupeSanguin)
    {
        $this->groupeSanguin = $groupeSanguin;

        return $this;
    }

    /**
     * Get groupeSanguin
     *
     * @return string 
     */
    public function getGroupeSanguin()
    {
        return $this->groupeSanguin;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Fichepatient
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return Fichepatient
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set codedm
     *
     * @param \hopital\MedecinIBundle\Entity\Dossiermedical $codedm
     * @return Fichepatient
     */
    public function setCodedm(\hopital\MedecinIBundle\Entity\Dossiermedical $codedm = null)
    {
        $this->codedm = $codedm;

        return $this;
    }

    /**
     * Get codedm
     *
     * @return \hopital\MedecinIBundle\Entity\Dossiermedical 
     */
    public function getCodedm()
    {
        return $this->codedm;
    }
}
