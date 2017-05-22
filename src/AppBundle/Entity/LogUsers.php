<?php

namespace AppBundle\Entity;

/**
 * LogUsers
 */
class LogUsers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $textAction;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $usersId;

    /**
     * @var int
     */
    private $visibilite;


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
     * Set textAction
     *
     * @param string $textAction
     *
     * @return LogUsers
     */
    public function setTextAction($textAction)
    {
        $this->textAction = $textAction;
    
        return $this;
    }

    /**
     * Get textAction
     *
     * @return string
     */
    public function getTextAction()
    {
        return $this->textAction;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return LogUsers
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return LogUsers
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return LogUsers
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

    /**
     * Set visibilite
     *
     * @param integer $visibilite
     *
     * @return LogUsers
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;
    
        return $this;
    }

    /**
     * Get visibilite
     *
     * @return integer
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }
}

