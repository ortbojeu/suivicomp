<?php

namespace AppBundle\Model;

class GroupeCompetence {

  // VARIABLES
  private $idGroupeCompetence;
  private $nomGroupe;
  private $idMatiere;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getIdGroupeCompetence() { return $this->idGroupeCompetence; }
  public function setIdGroupeCompetence($idGroupeCompetence) { $this->idGroupeCompetence = $idGroupeCompetence; }

  public function getNomGroupe() { return $this->nomGroupe; }
  public function setNomGroupe($nomGroupe) { $this->nomGroupe = $nomGroupe; }

  public function getIdMatiere() { return $this->idMatiere; }
  public function setIdMatiere($idMatiere) { $this->idMatiere = $idMatiere; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "GroupeCompetence - [ ";
    $str .= "idGroupeCompetence : " . ((isset($this->getIdGroupeCompetence()) && $this->getIdGroupeCompetence() != null) ? $this->getIdGroupeCompetence() : "");
    $str .= ", nomGroupe : " . ((isset($this->getNomGroupe()) && $this->getNomGroupe() != null) ? $this->getNomGroupe() : "");
    $str .= ", idMatiere : " . ((isset($this->getIdMatiere()) && $this->getIdMatiere() != null) ? $this->getIdMatiere() : "");
    $str .= " ]";
    return $str;
  }

}
