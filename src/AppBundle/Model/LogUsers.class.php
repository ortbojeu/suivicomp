<?php

namespace AppBundle\Model;

class LogUsers {

  // VARIABLES
  private $id;
  private $textAction;
  private $action;
  private $createdAt;
  private $idUsers;
  private $visibilite;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getId() { return $this->id; }
  public function setId($id) { $this->id = $id; }

  public function getTextAction() { return $this->textAction; }
  public function setTextAction($textAction) { $this->textAction = $textAction; }

  public function getAction() { return $this->action; }
  public function setAction($action) { $this->action = $action; }

  public function getCreateAt() { return $this->createAt; }
  public function setCreateAt($createAt) { $this->createAt = $createAt; }

  public function getIdUsers() { return $this->idUsers; }
  public function setIdUsers($idUsers) { $this->idUsers = $idUsers; }

  public function getVisibilite() { return $this->visibilite; }
  public function setVisibilite($visibilite) { $this->visibilite = $visibilite; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "LogUsers - [ ";
    $str .= "id : " . ((isset($this->getId()) && $this->getId() != null) ? $this->getId() : "");
    $str .= ", textAction : " . ((isset($this->getTextAction()) && $this->getTextAction() != null) ? $this->getTextAction() : "");
    $str .= ", action : " . ((isset($this->getAction()) && $this->getAction() != null) ? $this->getAction() : "");
    $str .= ", createAt : " . ((isset($this->getCreateAt()) && $this->getCreateAt() != null) ? $this->getCreateAt() : "");
    $str .= ", idUsers : " . ((isset($this->getIdUsers()) && $this->getIdUsers() != null) ? $this->getIdUsers() : "");
    $str .= ", visibilite : " . ((isset($this->getVisibilite()) && $this->getVisibilite() != null) ? $this->getVisibilite() : "");
    $str .= " ]";
    return $str;
  }

}
