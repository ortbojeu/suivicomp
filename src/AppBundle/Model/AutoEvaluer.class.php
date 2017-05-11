<?php

namespace AppBundle\Model;

class AutoEvaluer {

  // VARIABLES
  private $id;
  private $dateAutoEval;
  private $noteAutoEval;
  private $idCompetence;
  private $idUsers;
  private $commentaire.;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getDateAutoEval() { return $this->dateAutoEval; }
  public function setDateAutoEval($dateAutoEval) { $this->dateAutoEval = $dateAutoEval; }

  public function getNoteAutoEval() { return $this->noteAutoEval; }
  public function setNoteAutoEval($noteAutoEval) { $this->noteAutoEval = $noteAutoEval; }

  public function getIdCompetence() { return $this->idCompetence; }
  public function setIdCompetence($idCompetence) { $this->idCompetence = $idCompetence; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  public function getCommentaire() { return $this->commentaire; }
  public function setCommentaire($commentaire) { $this->commentaire = $commentaire; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "AutoEvaluer - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", dateAutoEval : " . ((isset($this->getDateAutoEval()) && $this->getDateAutoEval() != null) ? $this->getDateAutoEval() : "");
    $str .= ", noteAutoEval : " . ((isset($this->getNoteAutoEval()) && $this->getNoteAutoEval() != null) ? $this->getNoteAutoEval() : "");
    $str .= ", idCompetence : " . ((isset($this->getIdCompetence()) && $this->getIdCompetence() != null) ? $this->getIdCompetence() : "");
    $str .= ", idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= ", commentaire : " . ((isset($this->getCommentaire()) && $this->getCommentaire() != null) ? $this->getCommentaire() : "");
    $str .= " ]";
    return $str;
  }

}
