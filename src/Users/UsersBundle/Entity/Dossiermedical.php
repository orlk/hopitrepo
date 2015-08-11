<?php

namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossiermedical
 *
 * @ORM\Table(name="dossiermedical", indexes={@ORM\Index(name="codePatient", columns={"codePatient"})})
 * @ORM\Entity
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
     * @ORM\Column(name="dateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="codePatient", type="string", length=20, nullable=false)
     */
    private $codepatient;

    /**
     * @var string
     *
     * @ORM\Column(name="codeMedecin", type="string", length=20, nullable=false)
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
     * @param string $codepatient
     * @return Dossiermedical
     */
    public function setCodepatient($codepatient)
    {
        $this->codepatient = $codepatient;

        return $this;
    }

    /**
     * Get codepatient
     *
     * @return string 
     */
    public function getCodepatient()
    {
        return $this->codepatient;
    }

    /**
     * Set codemedecin
     *
     * @param string $codemedecin
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
     * @return string 
     */
    public function getCodemedecin()
    {
        return $this->codemedecin;
    }
}
