<?php

namespace hopital\MedecinIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossiermedical
 *
 * @ORM\Table(name="dossiermedical", indexes={@ORM\Index(name="codeMedecin", columns={"codeMedecin"}), @ORM\Index(name="codePatient", columns={"codePatient"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="hopital\MedecinIBundle\Entity\DossierMRepository")
 */
class Dossiermedical
{
    /**
     * @var string
     *
     * @ORM\Column(name="codeDm", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codedm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $datecreation ;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codePatient", referencedColumnName="idPatient")
     * })
     */
    private $codepatient;

    /**
     * @var string
     *
     * @ORM\Column(name="codeMedecin", type="string", length=30, nullable=false)
     */
    private $codemedecin;



    /**
     * Get codedm
     *
     * @return string 
     */
    public function getCodedm()
    {
        return $this->codedm;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Dossiermedical
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
     * Set codepatient
     *
     * @param \hopital\MedecinIBundle\Entity\Patient $codepatient
     * @return Dossiermedical
     */
    public function setCodepatient(\hopital\MedecinIBundle\Entity\Patient $codepatient = null)
    {
        $this->codepatient = $codepatient;

        return $this;
    }

    /**
     * Get codepatient
     *
     * @return \hopital\MedecinIBundle\Entity\Patient 
     */
    public function getCodepatient()
    {
        return $this->codepatient;
    }

    /**
     * Set codemedecin
     *
     * @return Dossiermedical
     */
    public function setCodemedecin($codemedecin)
    {
        $this->codemedecin = $codemedecin;

        return $this;
    }

    /**
     * Get codemedecin
     *
     * @return \hopital\MedecinIBundle\Entity\Medecin 
     */
    public function getCodemedecin()
    {
        return $this->codemedecin;
    }
}
