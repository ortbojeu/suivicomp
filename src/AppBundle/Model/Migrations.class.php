<?php

namespace AppBundle\Model;

class Migrations {

  private $migration;
  private $batch;

  public function __construct() {}

  public function getMigration() { return $this->migration }
  public function setMigration($migration) { $this->migration = $migration }

  public function getBatch() { return $this->batch }
  public function setBatch($batch) { $this->batch = $batch }

  public function toString() {
    $str = "Migrations - [ ";
    $str .= "migration: " . ((isset($this->getMigration()) && $this->getMigration() != null) ? $this->getMigration() : "");
    $str .= ", batch: " . ((isset($this->getBatch()) && $this->getBatch() != null) ? $this->getBatch() : "");
    $str .= " ]";
    return str;
  }

}
