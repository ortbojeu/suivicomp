<?php

namespace AppBundle\Model;

class Matiere {

  // VARIABLES
  private $idMatiere;
  private $nomMatiere;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getIdMatiere() { return $this->idMatiere; }
  public function setIdMatiere($idMatiere) { $this->idMatiere = $idMatiere; }

  public function getNomMatiere() { return $this->nomMatiere; }
  public function setNomMatiere($nomMatiere) { $this->nomMatiere = $nomMatiere; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Matiere - [ ";
    $str .= "idMatiere : " . ((isset($this->getIdMatiere()) && $this->getIdMatiere() != null) ? $this->getIdMatiere() : "");
    $str .= ", nomMatiere : " . ((isset($this->getNomMatiere()) && $this->getNomMatiere() != null) ? $this->getNomMatiere() : "");
    $str .= " ]";
    return $str;
  }

}
