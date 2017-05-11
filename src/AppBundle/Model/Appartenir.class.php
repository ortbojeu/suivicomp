<?php

namespace AppBundle\Model;

class Appartenir {

  // VARIABLES
  private $id;
  private $dateChangement;
  private $idGroupe;
  private $idUsers;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getDateChangement() { return $this->dateChangement; }
  public function setDateChangement($dateChangement) { $this->dateChangement = $dateChangement; }

  public function getIdGroupe() { return $this->idGroupe; }
  public function setIdGroupe($idGroupe) { $this->idGroupe = $idGroupe; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Appartenir - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", dateChangement : " . ((isset($this->getDateChangement()) && $this->getDateChangement() != null) ? $this->getDateChangement() : "");
    $str .= ", idGroupe : " . ((isset($this->getIdGroupe()) && $this->getIdGroupe() != null) ? $this->getIdGroupe() : "");
    $str .= ", idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= " ]";
    return $str;
  }

}
