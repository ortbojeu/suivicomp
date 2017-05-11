<?php

namespace AppBundle\Model;

class Contenir {

  // VARIABLES
  private $id;
  private $idEpreuve;
  private $idCompetence;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getIdEpreuve() { return $this->idEpreuve; }
  public function setIdEpreuve($idEpreuve) { $this->idEpreuve = $idEpreuve; }

  public function getIdCompetence() { return $this->idCompetence; }
  public function setIdCompetence($idCompetence) { $this->idCompetence = $idCompetence; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Contenir - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", idEpreuve : " . ((isset($this->getIdEpreuve()) && $this->getIdEpreuve() != null) ? $this->getIdEpreuve() : "");
    $str .= ", idCompetence : " . ((isset($this->getIdCompetence()) && $this->getIdCompetence() != null) ? $this->getIdCompetence() : "");
    $str .= " ]";
    return $str;
  }

}
