<?php

namespace AppBundle\Entity;

/**
 * Annee
 */
class Annee
{

    /**
     * @var int
     */
    private $idAnnee;

    /**
     * @var \Date
     */
    private $dateDebut;

    /**
     * @var \Date
     */
    private $dateFin;

    /**
     * @var string
     */
    private $intitule;


    /**
     * Set idAnnee
     *
     * @param integer $idAnnee
     *
     * @return Annee
     */
    public function setIdAnnee($idAnnee)
    {
        $this->idAnnee = $idAnnee;

        return $this;
    }

    /**
     * Get idAnnee
     *
     * @return integer
     */
    public function getIdAnnee()
    {
        return $this->idAnnee;
    }

    /**
     * Set dateDebut
     *
     * @param \Date $dateDebut
     *
     * @return Annee
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \Date
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \Date $dateFin
     *
     * @return Annee
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \Date
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Annee
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }
}
