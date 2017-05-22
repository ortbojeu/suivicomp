<?php

namespace AppBundle\Entity;

/**
 * Intervient
 */
class Intervient
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idIntervenant;

    /**
     * @var int
     */
    private $idMatiere;

    /**
     * @var int
     */
    private $usersId;


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
     * Set idIntervenant
     *
     * @param integer $idIntervenant
     *
     * @return Intervient
     */
    public function setIdIntervenant($idIntervenant)
    {
        $this->idIntervenant = $idIntervenant;
    
        return $this;
    }

    /**
     * Get idIntervenant
     *
     * @return integer
     */
    public function getIdIntervenant()
    {
        return $this->idIntervenant;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Intervient
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Intervient
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;
    
        return $this;
    }

    /**
     * Get usersId
     *
     * @return integer
     */
    public function getUsersId()
    {
        return $this->usersId;
    }
}

