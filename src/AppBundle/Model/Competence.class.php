<?php

namespace AppBundle\Model;

class Competence {

  // VARIABLES
  private $nomCompetence;
  private $idCompetence;
  private $groupeCompetence;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getNomCompetence() { return $this->nomCompetence; }
  public function setNomCompetence($nomCompetence) { $this->nomCompetence = $nomCompetence; }

  public function getIdCompetence() { return $this->idCompetence; }
  public function setIdCompetence($idCompetence) { $this->idCompetence = $idCompetence; }

  public function getGroupeCompetence() { return $this->groupeCompetence; }
  public function setGroupeCompetence($groupeCompetence) { $this->groupeCompetence = $groupeCompetence; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Competence - [ ";
    $str .= "nomCompetence : " . ((isset($this->getNomCompetence()) && $this->getNomCompetence() != null) ? $this->getNomCompetence() : "");
    $str .= "idCompetence : " . ((isset($this->getIdCompetence()) && $this->getIdCompetence() != null) ? $this->getIdCompetence() : "");
    $str .= "groupeCompetence : " . ((isset($this->getGroupeCompetence()) && $this->getGroupeCompetence() != null) ? $this->getGroupeCompetence() : "");
    $str .= " ]";
    return $str;
  }

}
