<?php

namespace AppBundle\Entity;

/**
 * Competence
 */
class Competence
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomCompetence;

    /**
     * @var int
     */
    private $idGroupeCompetence;


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
     * Set nomCompetence
     *
     * @param string $nomCompetence
     *
     * @return Competence
     */
    public function setNomCompetence($nomCompetence)
    {
        $this->nomCompetence = $nomCompetence;
    
        return $this;
    }

    /**
     * Get nomCompetence
     *
     * @return string
     */
    public function getNomCompetence()
    {
        return $this->nomCompetence;
    }

    /**
     * Set idGroupeCompetence
     *
     * @param integer $idGroupeCompetence
     *
     * @return Competence
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
}

