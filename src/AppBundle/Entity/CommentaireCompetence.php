<?php

namespace AppBundle\Entity;

/**
 * CommentaireCompetence
 */
class CommentaireCompetence
{
    /**
     * @var int
     */
    private $idCommentaireCompetence;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var int
     */
    private $idCompetence;


    /**
     * Set idCommentaireCompetence
     *
     * @param integer $idCommentaireCompetence
     *
     * @return CommentaireCompetence
     */
    public function setIdCommentaireCompetence($idCommentaireCompetence)
    {
        $this->idCommentaireCompetence = $idCommentaireCompetence;

        return $this;
    }

    /**
     * Get idCommentaireCompetence
     *
     * @return integer
     */
    public function getIdCommentaireCompetence()
    {
        return $this->idCommentaireCompetence;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return CommentaireCompetence
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
     * @return CommentaireCompetence
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
