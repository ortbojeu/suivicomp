<?php

namespace AppBundle\Entity;

/**
 * Migration
 */
class Migration
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $migration;

    /**
     * @var int
     */
    private $batch;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set migration
     *
     * @param string $migration
     *
     * @return Migration
     */
    public function setMigration($migration)
    {
        $this->migration = $migration;
    
        return $this;
    }

    /**
     * Get migration
     *
     * @return string
     */
    public function getMigration()
    {
        return $this->migration;
    }

    /**
     * Set batch
     *
     * @param integer $batch
     *
     * @return Migration
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
    
        return $this;
    }

    /**
     * Get batch
     *
     * @return integer
     */
    public function getBatch()
    {
        return $this->batch;
    }
}

