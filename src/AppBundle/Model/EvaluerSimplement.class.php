<?php

namespace AppBundle\Model;

class EvaluerSimplement {

  // VARIABLES
  private $id;
  private $noteEvaluerSimplement;
  private $dateEvaluerSimplement;
  private $idCompetence;
  private $idUsersProf;
  private $idUsersEleve;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getNoteEvaluerSimplement() { return $this->noteEvaluerSimplement; }
  public function setNoteEvaluerSimplement($noteEvaluerSimplement) { $this->noteEvaluerSimplement = $noteEvaluerSimplement; }

  public function getDateEvaluerSimplement() { return $this->dateEvaluerSimplement; }
  public function setDateEvaluerSimplement($dateEvaluerSimplement) { $this->dateEvaluerSimplement = $dateEvaluerSimplement; }

  public function getIdCompetence() { return $this->idCompetence; }
  public function setIdCompetence($idCompetence) { $this->idCompetence = $idCompetence; }

  public function getIdUsersProf() { return $this->idUsersProf; }
  public function setIdUsersProf($idUsersProf) { $this->idUsersProf = $idUsersProf; }

  public function getIdUsersEleve() { return $this->idUsersEleve; }
  public function setIdUsersEleve($idUsersEleve) { $this->idUsersEleve = $idUsersEleve; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "EvaluerSimplement - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", noteEvaluerSimplement : " . ((isset($this->getNoteEvaluerSimplement()) && $this->getNoteEvaluerSimplement() != null) ? $this->getNoteEvaluerSimplement() : "");
    $str .= ", dateEvaluerSimplement : " . ((isset($this->getDateEvaluerSimplement()) && $this->getDateEvaluerSimplement() != null) ? $this->getDateEvaluerSimplement() : "");
    $str .= ", idCompetence : " . ((isset($this->getIdCompetence()) && $this->getIdCompetence() != null) ? $this->getIdCompetence() : "");
    $str .= ", idUsersProf : " . ((isset($this->getIdUsersProf()) && $this->getIdUsersProf() != null) ? $this->getIdUsersProf() : "");
    $str .= ", idUsersEleve : " . ((isset($this->getIdUsersEleve()) && $this->getIdUsersEleve() != null) ? $this->getIdUsersEleve() : "");
    $str .= " ]";
    return $str;
  }

}
