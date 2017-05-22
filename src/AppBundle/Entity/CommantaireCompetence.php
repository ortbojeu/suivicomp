<?php

namespace AppBundle\Entity;

/**
 * CommantaireCompetence
 */
class CommantaireCompetence
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $commentaire;

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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return CommantaireCompetence
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

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return CommantaireCompetence
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

