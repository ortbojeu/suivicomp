<?php

namespace AppBundle\Model;

class Intervient {

  // VARIABLES
  private $id;
  private $idIntervenant;
  private $idMatiere;
  private $idUsers;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getIdIntervenant() { return $this->idIntervenant; }
  public function setIdIntervenant($idIntervenant) { $this->idIntervenant = $idIntervenant; }

  public function getIdMatiere() { return $this->idMatiere; }
  public function setIdMatiere($idMatiere) { $this->idMatiere = $idMatiere; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Intervient - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", idIntervenant : " . ((isset($this->getIdIntervenant()) && $this->getIdIntervenant() != null) ? $this->getIdIntervenant() : "");
    $str .= ", idMatiere : " . ((isset($this->getIdMatiere()) && $this->getIdMatiere() != null) ? $this->getIdMatiere() : "");
    $str .= ", idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= " ]";
    return $str;
  }

}
