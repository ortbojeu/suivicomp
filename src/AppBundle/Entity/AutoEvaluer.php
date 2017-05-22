<?php

namespace AppBundle\Entity;

/**
 * AutoEvaluer
 */
class AutoEvaluer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateAutoEval;

    /**
     * @var int
     */
    private $noteAutoEval;

    /**
     * @var int
     */
    private $idCompetence;

    /**
     * @var int
     */
    private $usersId;

    /**
     * @var string
     */
    private $commentaire;


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
     * Set dateAutoEval
     *
     * @param \DateTime $dateAutoEval
     *
     * @return AutoEvaluer
     */
    public function setDateAutoEval($dateAutoEval)
    {
        $this->dateAutoEval = $dateAutoEval;
    
        return $this;
    }

    /**
     * Get dateAutoEval
     *
     * @return \DateTime
     */
    public function getDateAutoEval()
    {
        return $this->dateAutoEval;
    }

    /**
     * Set noteAutoEval
     *
     * @param integer $noteAutoEval
     *
     * @return AutoEvaluer
     */
    public function setNoteAutoEval($noteAutoEval)
    {
        $this->noteAutoEval = $noteAutoEval;
    
        return $this;
    }

    /**
     * Get noteAutoEval
     *
     * @return integer
     */
    public function getNoteAutoEval()
    {
        return $this->noteAutoEval;
    }

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return AutoEvaluer
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

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return AutoEvaluer
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return AutoEvaluer
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

