<?php

namespace AppBundle\Entity;

/**
 * GroupeCompetence
 */
class GroupeCompetence
{
    /**
     * @var int
     */
    private $idGroupeCompetence;

    /**
     * @var string
     */
    private $nomGroupe;

    /**
     * @var int
     */
    private $idMatiere;


    /**
     * Set idGroupeCompetence
     *
     * @param integer $idGroupeCompetence
     *
     * @return GroupeCompetence
     */
    public function setIdGroupeCompetence($idGroupeCompetence)
    {
        $this->idGroupeCompetence = $idGroupeCompetence;

        return $this;
    }

    /**
     * Get idGroupeCompetence
     *
     * @return integer
     */
    public function getIdGroupeCompetence()
    {
        return $this->idGroupeCompetence;
    }

    /**
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return GroupeCompetence
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return GroupeCompetence
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
}
