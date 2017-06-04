<?php

namespace AppBundle\Entity;

/**
 * EvaluerSimplement
 */
class EvaluerSimplement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $noteEvaluerSimplement;

    /**
     * @var \DateTime
     */
    private $dateEvaluerSimplement;

    /**
     * @var int
     */
    private $idCompetence;

    /**
     * @var int
     */
    private $usersIdProf;

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
     * Set noteEvaluerSimplement
     *
     * @param integer $noteEvaluerSimplement
     *
     * @return EvaluerSimplement
     */
    public function setNoteEvaluerSimplement($noteEvaluerSimplement)
    {
        $this->noteEvaluerSimplement = $noteEvaluerSimplement;
    
        return $this;
    }

    /**
     * Get noteEvaluerSimplement
     *
     * @return integer
     */
    public function getNoteEvaluerSimplement()
    {
        return $this->noteEvaluerSimplement;
    }

    /**
     * Set dateEvaluerSimplement
     *
     * @param \DateTime $dateEvaluerSimplement
     *
     * @return EvaluerSimplement
     */
    public function setDateEvaluerSimplement($dateEvaluerSimplement)
    {
        $this->dateEvaluerSimplement = $dateEvaluerSimplement;
    
        return $this;
    }

    /**
     * Get dateEvaluerSimplement
     *
     * @return \DateTime
     */
    public function getDateEvaluerSimplement()
    {
        return $this->dateEvaluerSimplement;
    }

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return EvaluerSimplement
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
     * Set usersIdProf
     *
     * @param integer $usersIdProf
     *
     * @return EvaluerSimplement
     */
    public function setUsersIdProf($usersIdProf)
    {
        $this->usersIdProf = $usersIdProf;
    
        return $this;
    }

    /**
     * Get usersIdProf
     *
     * @return integer
     */
    public function getUsersIdProf()
    {
        return $this->usersIdProf;
    }

    /**
     * Set usersIdEleve
     *
     * @param integer $usersIdEleve
     *
     * @return EvaluerSimplement
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

