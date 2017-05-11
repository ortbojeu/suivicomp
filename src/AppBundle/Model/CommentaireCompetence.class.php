<?php

namespace AppBundle\Model;

class CommentaireCompetence {

  // VARIABLES
  private $idCommentaireCompetence;
  private $commentaire;
  private $idCompetence;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getIdCommentaireCompetence() { return $this->idCommentaireCompetence; }
  public function setIdCommentaireCompetence($idCommentaireCompetence) { $this->idCommentaireCompetence = $idCommentaireCompetence; }

  public function getCommentaire() { return $this->commentaire; }
  public function setCommentaire($commentaire) { $this->commentaire = $commentaire; }

  public function getIdCompetence() { return $this->idCompetence; }
  public function setIdCompetence($idCompetence) { $this->idCompetence = $idCompetence; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "CommentaireCompetence - [ ";
    $str .= "idCommentaireCompetence : " . ((isset($this->getIdCommentaireCompetence()) && $this->getIdCommentaireCompetence() != null) ? $this->getIdCommentaireCompetence() : "");
    $str .= ", commentaire : " . ((isset($this->getCommentaire()) && $this->getCommentaire() != null) ? $this->getCommentaire() : "");
    $str .= ", idCompetence : " . ((isset($this->getIdCompetence()) && $this->getIdCompetence() != null) ? $this->getIdCompetence() : "");
    $str .= " ]";
    return $str;
  }

}
