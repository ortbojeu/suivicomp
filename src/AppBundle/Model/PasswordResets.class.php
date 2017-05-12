<?php

namespace AppBundle\Model;

class PasswordResets {

  private $email;
  private $token;
  private $createdAt;

  public function __construct() {}

  public function getEmail() { return $this->email }
  public function setEmail($email) { $this->email = $email }

  public function getToken() { return $this->token }
  public function setToken($token) { $this->token = $token }

  public function getCreateAt() { return $this->createAt }
  public function setCreateAt($createAt) { $this->createAt = $createAt }

  public function toString() {
    $str = "PasswordResets - [ ";
    $str .= "email: " . ((isset($this->getEmail()) && $this->getEmail() != null) ? $this->getEmail() : "");
    $str .= ", token: " . ((isset($this->getToken()) && $this->getToken() != null) ? $this->getToken() : "");
    $str .= ", createdAt: " . ((isset($this->getCreateAt()) && $this->getCreateAt() != null) ? $this->getCreateAt() : "");
    $str .= " ]";
    return str;
  }

}
