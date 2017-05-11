<?php

namespace AppBundle\Model;

class Class {

  // VARIABLES
  private $var;

  // CONSTRUCTOR
  public function __construct() {}

  // GETTER & SETTER
  public function getVar() { return $this->var; }
  public function setVar($var) { $this->var = $var; }

  // TOOL FUNCTIONS
  public function toString() {
    $str = "Class - [ ";
    $str .= "var : " . ((isset($this->getVar()) && $this->getVar() != null) ? $this->getVar() : "");
    $str .= " ]";
    return $str;
  }

}
