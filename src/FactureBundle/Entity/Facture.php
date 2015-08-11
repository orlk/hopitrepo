<?php

namespace FactureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="idPatient", columns={"idPatient"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_consultation", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixConsultation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_chambre", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixChambre;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_trait", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixTrait;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_exam_labo", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixExamLabo;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="date_facture", type="string", length=255, nullable=true)
     */
    private $dateFacture;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient", referencedColumnName="idPatient")
     * })
     */
    private $idpatient;



    /**
     * Set prixConsultation
     *
     * @param float $prixConsultation
     * @return Facture
     */
    public function setPrixConsultation($prixConsultation)
    {
        $this->prixConsultation = $prixConsultation;

        return $this;
    }

    /**
     * Get prixConsultation
     *
     * @return float 
     */
    public function getPrixConsultation()
    {
        return $this->prixConsultation;
    }

    /**
     * Set prixChambre
     *
     * @param float $prixChambre
     * @return Facture
     */
    public function setPrixChambre($prixChambre)
    {
        $this->prixChambre = $prixChambre;

        return $this;
    }

    /**
     * Get prixChambre
     *
     * @return float 
     */
    public function getPrixChambre()
    {
        return $this->prixChambre;
    }

    /**
     * Set prixTrait
     *
     * @param float $prixTrait
     * @return Facture
     */
    public function setPrixTrait($prixTrait)
    {
        $this->prixTrait = $prixTrait;

        return $this;
    }

    /**
     * Get prixTrait
     *
     * @return float 
     */
    public function getPrixTrait()
    {
        return $this->prixTrait;
    }

    /**
     * Set prixExamLabo
     *
     * @param float $prixExamLabo
     * @return Facture
     */
    public function setPrixExamLabo($prixExamLabo)
    {
        $this->prixExamLabo = $prixExamLabo;

        return $this;
    }

    /**
     * Get prixExamLabo
     *
     * @return float 
     */
    public function getPrixExamLabo()
    {
        return $this->prixExamLabo;
    }

    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     * @return Facture
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float 
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set dateFacture
     *
     * @param string $dateFacture
     * @return Facture
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return string 
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Get idfacture
     *
     * @return integer 
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * Set idpatient
     *
     * @param \FactureBundle\Entity\Patient $idpatient
     * @return Facture
     */
    public function setIdpatient(\FactureBundle\Entity\Patient $idpatient = null)
    {
        $this->idpatient = $idpatient;

        return $this;
    }

    /**
     * Get idpatient
     *
     * @return \FactureBundle\Entity\Patient 
     */
    public function getIdpatient()
    {
        return $this->idpatient;
    }
}
