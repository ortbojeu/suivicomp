<?php

namespace AppBundle\Model;

class Appeller {

  // VARIABLES
  private $id;
  private $idContact;
  private $idUsers;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getIdContact() { return $this->idContact; }
  public function setIdContact($idContact) { $this->idContact = $idContact; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Appeller - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", idContact : " . ((isset($this->getIdContact()) && $this->getIdContact() != null) ? $this->getIdContact() : "");
    $str .= ", idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= " ]";
    return $str;
  }

}
