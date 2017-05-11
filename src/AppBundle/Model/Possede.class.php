<?php

namespace AppBundle\Model;

class Possede {

  // VARIABLES
  private $mention;
  private $dateObtention;
  private $id;
  private $idDiplome;
  private $idUsers;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getMention() { return $this->mention; }
  public function setMention($mention) { $this->mention = $mention; }

  public function getDateObtention() { return $this->dateObtention; }
  public function setDateObtention($dateObtention) { $this->dateObtention = $dateObtention; }

  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getIdDiplome() { return $this->idDiplome; }
  public function setIdDiplome($idDiplome) { $this->idDiplome = $idDiplome; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Possede - [ ";
    $str .= "mention : " . ((isset($this->getMention()) && $this->getMention() != null) ? $this->getMention() : "");
    $str .= "dateObtention : " . ((isset($this->getDateObtention()) && $this->getDateObtention() != null) ? $this->getDateObtention() : "");
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= "idDiplome : " . ((isset($this->getIdDiplome()) && $this->getIdDiplome() != null) ? $this->getIdDiplome() : "");
    $str .= "idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= " ]";
    return $str;
  }

}
