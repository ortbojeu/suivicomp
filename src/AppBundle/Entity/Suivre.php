<?php

namespace AppBundle\Entity;

/**
 * Suivre
 */
class Suivre
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idGroupe;

    /**
     * @var int
     */
    private $idMatiere;


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
     * Set idGroupe
     *
     * @param integer $idGroupe
     *
     * @return Suivre
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;
    
        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Suivre
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;
    
        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return integer
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }
}

