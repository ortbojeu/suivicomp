<?php

namespace AppBundle\Entity;

/**
 * Diplome
 */
class Diplome
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomDiplome;

    /**
     * @var string
     */
    private $niveauDiplome;


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
     * Set nomDiplome
     *
     * @param string $nomDiplome
     *
     * @return Diplome
     */
    public function setNomDiplome($nomDiplome)
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }

    /**
     * Get nomDiplome
     *
     * @return string
     */
    public function getNomDiplome()
    {
        return $this->nomDiplome;
    }

    /**
     * Set niveauDiplome
     *
     * @param string $niveauDiplome
     *
     * @return Diplome
     */
    public function setNiveauDiplome($niveauDiplome)
    {
        { if (!in_array($status, array(self::STATUS_VISIBLE, self::STATUS_INVISIBLE)))
          { throw new \InvalidArgumentException("Invalid status"); } $this->status = $status; }
    }

    /**
     * Get niveauDiplome
     *
     * @return string
     */
    public function getNiveauDiplome()
    {
        return $this->niveauDiplome;
    }
}
