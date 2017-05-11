<?php

namespace AppBundle\Model;

class EvaluerAvecEpreuve {

  // VARIABLES
  private $id;
  private $dateEval;
  private $role;
  private $idCompetence;
  private $idEpreuve;
  private $idUsersEleve;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getDateEval() { return $this->dateEval; }
  public function setDateEval($dateEval) { $this->dateEval = $dateEval; }

  public function getRole() { return $this->role; }
  public function setRole($role) { $this->role = $role; }

  public function getIdCompetence() { return $this->idCompetence; }
  public function setIdCompetence($idCompetence) { $this->idCompetence = $idCompetence; }

  public function getIdEpreuve() { return $this->idEpreuve; }
  public function setIdEpreuve($idEpreuve) { $this->idEpreuve = $idEpreuve; }

  public function getIdUsersEleve() { return $this->idUsersEleve; }
  public function setIdUsersEleve($idUsersEleve) { $this->idUsersEleve = $idUsersEleve; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "EvaluerAvecEpreuve - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", dateEval : " . ((isset($this->getDateEval()) && $this->getDateEval() != null) ? $this->getDateEval() : "");
    $str .= ", role : " . ((isset($this->getRole()) && $this->getRole() != null) ? $this->getRole() : "");
    $str .= ", idCompetence : " . ((isset($this->getIdCompetence()) && $this->getIdCompetence() != null) ? $this->getIdCompetence() : "");
    $str .= ", idEpreuve : " . ((isset($this->getIdEpreuve()) && $this->getIdEpreuve() != null) ? $this->getIdEpreuve() : "");
    $str .= ", idUsersEleve : " . ((isset($this->getIdUsersEleve()) && $this->getIdUsersEleve() != null) ? $this->getIdUsersEleve() : "");
    $str .= " ]";
    return $str;
  }

}
