<?php

namespace FactureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossiermedical
 *
 * @ORM\Table(name="dossiermedical")
 * @ORM\Entity
 */
class Dossiermedical
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codeDm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codedm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePatient", type="integer", nullable=false)
     */
    private $codepatient;

    /**
     * @var integer
     *
     * @ORM\Column(name="codeMedecin", type="integer", nullable=false)
     */
    private $codemedecin;



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
     * @param integer $codepatient
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
     * @return integer 
     */
    public function getCodepatient()
    {
        return $this->codepatient;
    }

    /**
     * Set codemedecin
     *
     * @param integer $codemedecin
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
     * @return integer 
     */
    public function getCodemedecin()
    {
        return $this->codemedecin;
    }

    /**
     * Get codedm
     *
     * @return integer 
     */
    public function getCodedm()
    {
        return $this->codedm;
    }
}
