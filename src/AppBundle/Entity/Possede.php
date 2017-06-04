<?php

namespace AppBundle\Entity;

/**
 * Possede
 */
class Possede
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $mention;

    /**
     * @var string
     */
    private $dateObtention;

    /**
     * @var int
     */
    private $idDiplome;

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
     * Set mention
     *
     * @param string $mention
     *
     * @return Possede
     */
    public function setMention($mention)
    {
        $this->mention = $mention;
    
        return $this;
    }

    /**
     * Get mention
     *
     * @return string
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set dateObtention
     *
     * @param string $dateObtention
     *
     * @return Possede
     */
    public function setDateObtention($dateObtention)
    {
        $this->dateObtention = $dateObtention;
    
        return $this;
    }

    /**
     * Get dateObtention
     *
     * @return string
     */
    public function getDateObtention()
    {
        return $this->dateObtention;
    }

    /**
     * Set idDiplome
     *
     * @param integer $idDiplome
     *
     * @return Possede
     */
    public function setIdDiplome($idDiplome)
    {
        $this->idDiplome = $idDiplome;
    
        return $this;
    }

    /**
     * Get idDiplome
     *
     * @return integer
     */
    public function getIdDiplome()
    {
        return $this->idDiplome;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Possede
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

