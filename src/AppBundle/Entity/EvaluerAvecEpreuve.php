<?php

namespace AppBundle\Entity;

/**
 * EvaluerAvecEpreuve
 */
class EvaluerAvecEpreuve
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateEval;

    /**
     * @var int
     */
    private $note;

    /**
     * @var int
     */
    private $idCompetence;

    /**
     * @var int
     */
    private $idEpreuve;

    /**
     * @var int
     */
    private $usersIdEleve;


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
     * Set dateEval
     *
     * @param \DateTime $dateEval
     *
     * @return EvaluerAvecEpreuve
     */
    public function setDateEval($dateEval)
    {
        $this->dateEval = $dateEval;
    
        return $this;
    }

    /**
     * Get dateEval
     *
     * @return \DateTime
     */
    public function getDateEval()
    {
        return $this->dateEval;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return EvaluerAvecEpreuve
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return EvaluerAvecEpreuve
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
     * Set idEpreuve
     *
     * @param integer $idEpreuve
     *
     * @return EvaluerAvecEpreuve
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
     * Set usersIdEleve
     *
     * @param integer $usersIdEleve
     *
     * @return EvaluerAvecEpreuve
     */
    public function setUsersIdEleve($usersIdEleve)
    {
        $this->usersIdEleve = $usersIdEleve;
    
        return $this;
    }

    /**
     * Get usersIdEleve
     *
     * @return integer
     */
    public function getUsersIdEleve()
    {
        return $this->usersIdEleve;
    }
}

