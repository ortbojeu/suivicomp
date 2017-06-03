<?php

namespace AppBundle\Entity;

/**
 * Appartenir
 */
class Appartenir
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \Date
     */
    private $dateChangement;

    /**
     * @var int
     */
    private $idGroupe;

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
     * Set dateChangement
     *
     * @param \Date $dateChangement
     *
     * @return Appartenir
     */
    public function setDateChangement($dateChangement)
    {
        $this->dateChangement = $dateChangement;

        return $this;
    }

    /**
     * Get dateChangement
     *
     * @return \Date
     */
    public function getDateChangement()
    {
        return $this->dateChangement;
    }

    /**
     * Set idGroupe
     *
     * @param integer $idGroupe
     *
     * @return Appartenir
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Appartenir
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
