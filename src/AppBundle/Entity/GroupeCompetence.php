<?php

namespace AppBundle\Entity;

/**
 * GroupeCompetence
 */
class GroupeCompetence
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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return GroupeCompetence
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
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return GroupeCompetence
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

