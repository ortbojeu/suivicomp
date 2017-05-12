<?php

namespace AppBundle\Model;

class Epreuve {

  // VARIABLES
  private $dateEpreuve ;
  private $idEpreuve;
  private $idUsers;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getDateEpreuve() { return $this->dateEpreuve; }
  public function setDateEpreuve($dateEpreuve) { $this->dateEpreuve = $dateEpreuve; }

  public function getIdEpreuve() { return $this->idEpreuve; }
  public function setIdEpreuve($idEpreuve) { $this->idEpreuve = $idEpreuve; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Epreuve - [ ";
    $str .= "dateEpreuve : " . ((isset($this->getDateEpreuve()) && $this->getDateEpreuve() != null) ? $this->getDateEpreuve() : "");
    $str .= ", idEpreuve : " . ((isset($this->getIdEpreuve()) && $this->getIdEpreuve() != null) ? $this->getIdEpreuve() : "");
    $str .= ", idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= " ]";
    return $str;
  }

}
