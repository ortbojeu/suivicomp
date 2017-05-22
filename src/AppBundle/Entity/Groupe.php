<?php

namespace AppBundle\Entity;

/**
 * Groupe
 */
class Groupe
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomGroupe;

    /**
     * @var int
     */
    private $idAnnee;

    /**
     * @var int
     */
    private $idDiplome;


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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return Groupe
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;
    
        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set idAnnee
     *
     * @param integer $idAnnee
     *
     * @return Groupe
     */
    public function setIdAnnee($idAnnee)
    {
        $this->idAnnee = $idAnnee;
    
        return $this;
    }

    /**
     * Get idAnnee
     *
     * @return integer
     */
    public function getIdAnnee()
    {
        return $this->idAnnee;
    }

    /**
     * Set idDiplome
     *
     * @param integer $idDiplome
     *
     * @return Groupe
     */
    public function setIdDiplome($idDiplome)
    {
        $this->idDiplome = $idDiplome;
    
        return $this;
    }

    /**
     * Get idDiplome
     *
     * @return integer
     */
    public function getIdDiplome()
    {
        return $this->idDiplome;
    }
}

