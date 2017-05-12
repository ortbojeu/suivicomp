<?php

namespace AppBundle\Model;

class Contact {

  private $nomContact;
  private $prenomContact;
  private $adresseContact;
  private $CPContact;
  private $villeContact;
  private $telFixeContact;
  private $telMobileContact;
  private $idContact;

  public function __construct() {}

  public function getNomContact() { return $this->nomContact }
  public function setNomContact($nomContact) { $this->nomContact = $nomContact }

  public function getPrenomContact() { return $this->prenomContact }
  public function setPrenomContact($prenomContact) { $this->prenomContact = $prenomContact }

  public function getAdresseContact() { return $this->adresseContact }
  public function setAdresseContact($adresseContact) { $this->adresseContact = $adresseContact }

  public function getCPContact() { return $this->CPContact }
  public function setCPContact($CPContact) { $this->CPContact = $CPContact }

  public function getVilleContact() { return $this->villeContact }
  public function setVilleContact($villeContact) { $this->villeContact = $villeContact }

  public function getTelFixeContact() { return $this->telFixeContact }
  public function setTelFixeContact($telFixeContact) { $this->telFixeContact = $telFixeContact }

  public function getTelMobileContact() { return $this->telMobileContact }
  public function setTelMobileContact($telMobileContact) { $this->telMobileContact = $telMobileContact }

  public function getIdContact() { return $this->idContact }
  public function setIdContact($idContact) { $this->idContact = $idContact }

  public function toString() {
    $str = "Contact - [ ";
    $str .= "nomContact: " . ((isset($this->getNomContact()) && $this->getNomContact() != null) ? $this->getNomContact() : "");
    $str .= ", prenomContact: " . ((isset($this->getPrenomContact()) && $this->getPrenomContact() != null) ? $this->getPrenomContact() : "");
    $str .= ", adresseContact: " . ((isset($this->getAdresseContact()) && $this->getAdresseContact() != null) ? $this->getAdresseContact() : "");
    $str .= ", CPContact: " . ((isset($this->getCPContact()) && $this->getCPContact() != null) ? $this->getCPContact() : "");
    $str .= ", villeContact: " . ((isset($this->getVilleContact()) && $this->getVilleContact() != null) ? $this->getVilleContact() : "");
    $str .= ", telFixeContact: " . ((isset($this->getTelFixeContact()) && $this->getTelFixeContact() != null) ? $this->getTelFixeContact() : "");
    $str .= ", telMobileContact: " . ((isset($this->getTelMobileContact()) && $this->getTelMobileContact() != null) ? $this->getTelMobileContact() : "");
    $str .= ", idContact: " . ((isset($this->getIdContact()) && $this->getIdContact() != null) ? $this->getIdContact() : "");
    $str .= " ]";
    return str;
  }

}
