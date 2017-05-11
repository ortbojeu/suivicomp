<?php

namespace AppBundle\Model;

class Diplome {

  private $idDiplome;
  private $nomDiplome;
  private $niveauDiplome;

  public function __construct() {}

  public function getIdDiplome() { return $this->idDiplome }
  public function setIdDiplome($idDiplome) { $this->idDiplome = $idDiplome }

  public function getNomDiplome() { return $this->nomDiplome }
  public function setNomDiplome($nomDiplome) { $this->nomDiplome = $nomDiplome }

  public function getNiveauDiplome() { return $this->niveauDiplome }
  public function setNiveauDiplome($niveauDiplome) { $this->niveauDiplome = $niveauDiplome }

  public function toString() {
    $str = "Diplome - [ ";
    $str .= "idDiplome: " . ((isset($this->getIdDiplome()) && $this->getIdDiplome() != null) ? $this->getIdDiplome() : "");
    $str .= ", nomDiplome: " . ((isset($this->getNomDiplome()) && $this->getNomDiplome() != null) ? $this->getNomDiplome() : "");
    $str .= ", niveauDiplome: " . ((isset($this->getNiveauDiplome()) && $this->getNiveauDiplome() != null) ? $this->getNiveauDiplome() : "");
    $str .= " ]";
    return str;
  }

}
