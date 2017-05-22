<?php

namespace AppBundle\Entity;

/**
 * Contenir
 */
class Contenir
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idEpreuve;

    /**
     * @var int
     */
    private $idCompetence;


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
     * Set idEpreuve
     *
     * @param integer $idEpreuve
     *
     * @return Contenir
     */
    public function setIdEpreuve($idEpreuve)
    {
        $this->idEpreuve = $idEpreuve;
    
        return $this;
    }

    /**
     * Get idEpreuve
     *
     * @return integer
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return Contenir
     */
    public function setIdCompetence($idCompetence)
    {
        $this->idCompetence = $idCompetence;
    
        return $this;
    }

    /**
     * Get idCompetence
     *
     * @return integer
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }
}

