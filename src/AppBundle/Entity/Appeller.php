<?php

namespace AppBundle\Entity;

/**
 * Appeller
 */
class Appeller
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idContact;

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
     * Set idContact
     *
     * @param integer $idContact
     *
     * @return Appeller
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;
    
        return $this;
    }

    /**
     * Get idContact
     *
     * @return integer
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Appeller
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

