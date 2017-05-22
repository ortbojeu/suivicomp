<?php

namespace AppBundle\Entity;

/**
 * Epreuve
 */
class Epreuve
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateEpreuve;

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
     * Set dateEpreuve
     *
     * @param \DateTime $dateEpreuve
     *
     * @return Epreuve
     */
    public function setDateEpreuve($dateEpreuve)
    {
        $this->dateEpreuve = $dateEpreuve;
    
        return $this;
    }

    /**
     * Get dateEpreuve
     *
     * @return \DateTime
     */
    public function getDateEpreuve()
    {
        return $this->dateEpreuve;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Epreuve
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

