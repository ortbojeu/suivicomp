<?php

namespace AppBundle\Model;

class Groupe {

  // VARIABLES
  private $idGroupe;
  private $nomGroupe;
  private $idAnnee;
  private $idDiplome;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getIdGroupe() { return $this->idGroupe; }
  public function setIdGroupe($idGroupe) { $this->idGroupe = $idGroupe; }

  public function getNomGroupe() { return $this->nomGroupe; }
  public function setNomGroupe($nomGroupe) { $this->nomGroupe = $nomGroupe; }

  public function getidAnnee() { return $this->idAnnee; }
  public function setidAnnee($idAnnee) { $this->idAnnee = $idAnnee; }

  public function getidDiplome() { return $this->idDiplome; }
  public function setidDiplome($idDiplome) { $this->idDiplome = $idDiplome; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Groupe - [ ";
    $str .= "idGroupe : " . ((isset($this->getIdGroupe()) && $this->getIdGroupe() != null) ? $this->getIdGroupe() : "");
    $str .= ", nomGroupe : " . ((isset($this->getNomGroupe()) && $this->getNomGroupe() != null) ? $this->getNomGroupe() : "");
    $str .= ", idAnnee : " . ((isset($this->getidAnnee()) && $this->getidAnnee() != null) ? $this->getidAnnee() : "");
    $str .= ", idDiplome : " . ((isset($this->getidDiplome()) && $this->getidDiplome() != null) ? $this->getidDiplome() : "");
    $str .= " ]";
    return $str;
  }

}
