<?php

namespace AppBundle\Model;

class User {

  private $id;
  private $name;
  private $role;
  private $email;
  private $password;
  private $rememberToken;
  private $createdAt;
  private $updatedAt;
  private $nom;
  private $prenom;
  private $adresse;
  private $CP;
  private $ville;
  private $telephone;
  private $dob;

  public function __construct() {}


  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getName() { return $this->name; }
  public function setName($name) { $this->name = $name; }

  public function getRole() { return $this->role; }
  public function setRole($role) { $this->role = $role; }

  public function getEmail() { return $this->email; }
  public function setEmail($email) { $this->email = $email; }

  public function getPassword() { return $this->password; }
  public function setPassword($password) { $this->password = $password; }

  public function getRememberToken() { return $this->rememberToken; }
  public function setRememberToken($rememberToken) { $this->rememberToken = $rememberToken; }

  public function getCreatedAt() { return $this->createdAt; }
  public function setCreatedAt($createdAt) { $this->createdAt = $createdAt; }

  public function getUpdatedAt() { return $this->updatedAt; }
  public function setUpdatedAt($updatedAt) { $this->updatedAt = $updatedAt; }

  public function getNom() { return $this->nom; }
  public function setNom($nom) { $this->nom = $nom; }

  public function getPrenom() { return $this->prenom; }
  public function setPrenom($prenom) { $this->prenom = $prenom; }

  public function getAdresse() { return $this->adresse; }
  public function setAdresse($adresse) { $this->adresse = $adresse; }

  public function getCP() { return $this->CP; }
  public function setCP($CP) { $this->CP = $CP; }

  public function getVille() { return $this->ville; }
  public function setVille($ville) { $this->ville = $ville; }

  public function getTelephone() { return $this->telephone; }
  public function setTelephone($telephone) { $this->telephone = $telephone; }

  public function getDob() { return $this->dob; }
  public function setDob($dob) { $this->dob = $dob; }


  public function toString() {
    $str = "User - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", name : " . ((isset($this->getName()) && $this->getName() != null) ? $this->getName() : "");
    $str .= ", role : " . ((isset($this->getRole()) && $this->getRole() != null) ? $this->getRole() : "");
    $str .= ", email : " . ((isset($this->getEmail()) && $this->getEmail() != null) ? $this->getEmail() : "");
    $str .= ", password : " . ((isset($this->getPassword()) && $this->getPassword() != null) ? $this->getPassword() : "");
    $str .= ", rememberToken : " . ((isset($this->getRememberToken()) && $this->getRememberToken() != null) ? $this->getRememberToken() : "");
    $str .= ", createdAt : " . ((isset($this->getCreatedAt()) && $this->getCreatedAt() != null) ? $this->getCreatedAt() : "");
    $str .= ", updatedAt : " . ((isset($this->getUpdatedAt()) && $this->getUpdatedAt() != null) ? $this->getUpdatedAt() : "");
    $str .= ", nom : " . ((isset($this->getNom()) && $this->getNom() != null) ? $this->getNom() : "");
    $str .= ", prenom : " . ((isset($this->getPrenom()) && $this->getPrenom() != null) ? $this->getPrenom() : "");
    $str .= ", adresse : " . ((isset($this->getAdresse()) && $this->getAdresse() != null) ? $this->getAdresse() : "");
    $str .= ", CP : " . ((isset($this->getCP()) && $this->getCP() != null) ? $this->getCP() : "");
    $str .= ", ville : " . ((isset($this->getVille()) && $this->getVille() != null) ? $this->getVille() : "");
    $str .= ", telephone : " . ((isset($this->getTelephone()) && $this->getTelephone() != null) ? $this->getTelephone() : "");
    $str .= ", dob : " . ((isset($this->getDob()) && $this->getDob() != null) ? $this->getDob() : "");
    $str .= " ]";
    return $str;
  }

}
