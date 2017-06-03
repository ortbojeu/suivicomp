<?php

namespace AppBundle\Entity;

/**
 * Matiere
 */
class Matiere
{

    /**
     * @var int
     */
    private $idMatiere;

    /**
     * @var string
     */
    private $nomMatiere;


    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Matiere
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return integer
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set nomMatiere
     *
     * @param string $nomMatiere
     *
     * @return Matiere
     */
    public function setNomMatiere($nomMatiere)
    {
        $this->nomMatiere = $nomMatiere;

        return $this;
    }

    /**
     * Get nomMatiere
     *
     * @return string
     */
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }
}
