<?php

namespace AppBundle\Model;

class Annee {

  // VARIABLES
  private $idAnnee;
  private $dateDebut;
  private $dateFin;
  private $intitule;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getIdAnnee() { return $this->idAnnee; }
  public function setIdAnnee($idAnnee) { $this->idAnnee = $idAnnee; }

  public function getDateDebut() { return $this->dateDebut; }
  public function setDateDebut($dateDebut) { $this->dateDebut = $dateDebut; }

  public function getDateFin() { return $this->dateFin; }
  public function setDateFin($dateFin) { $this->dateFin = $dateFin; }

  public function getIntitule() { return $this->intitule; }
  public function setIntitule($intitule) { $this->intitule = $intitule; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Annee - [ ";
    $str .= "idAnnee : " . ((isset($this->getIdAnnee()) && $this->getIdAnnee() != null) ? $this->getIdAnnee() : "");
    $str .= ", dateDebut : " . ((isset($this->getDateDebut()) && $this->getDateDebut() != null) ? $this->getDateDebut() : "");
    $str .= ", dateFin : " . ((isset($this->getDateFin()) && $this->getDateFin() != null) ? $this->getDateFin() : "");
    $str .= ", intitule : " . ((isset($this->getIntitule()) && $this->getIntitule() != null) ? $this->getIntitule() : "");
    $str .= " ]";
    return $str;
  }

}
