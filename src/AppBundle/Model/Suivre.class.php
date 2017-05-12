<?php

namespace AppBundle\Model;

class Suivre {

  // VARIABLES
  private $id;
  private $idGroupe;
  private $idMatiere;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getIdGroupe() { return $this->idGroupe; }
  public function setIdGroupe($idGroupe) { $this->idGroupe = $idGroupe; }

  public function getIdMatiere() { return $this->idMatiere; }
  public function setIdMatiere($idMatiere) { $this->idMatiere = $idMatiere; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Suivre - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", idGroupe : " . ((isset($this->getIdGroupe()) && $this->getIdGroupe() != null) ? $this->getIdGroupe() : "");
    $str .= ", idMatiere : " . ((isset($this->getIdMatiere()) && $this->getIdMatiere() != null) ? $this->getIdMatiere() : "");
    $str .= " ]";
    return $str;
  }

}
