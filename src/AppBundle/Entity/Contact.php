<?php

namespace AppBundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomContact;

    /**
     * @var string
     */
    private $prenomContact;

    /**
     * @var string
     */
    private $adreseContact;

    /**
     * @var string
     */
    private $cPContact;

    /**
     * @var string
     */
    private $villeContact;

    /**
     * @var string
     */
    private $telFixeContact;

    /**
     * @var string
     */
    private $telMobileContact;

    /**
     * @var int
     */
    private $idContact;


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
     * Set nomContact
     *
     * @param string $nomContact
     *
     * @return Contact
     */
    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    /**
     * Get nomContact
     *
     * @return string
     */
    public function getNomContact()
    {
        return $this->nomContact;
    }

    /**
     * Set prenomContact
     *
     * @param string $prenomContact
     *
     * @return Contact
     */
    public function setPrenomContact($prenomContact)
    {
        $this->prenomContact = $prenomContact;

        return $this;
    }

    /**
     * Get prenomContact
     *
     * @return string
     */
    public function getPrenomContact()
    {
        return $this->prenomContact;
    }

    /**
     * Set adreseContact
     *
     * @param string $adreseContact
     *
     * @return Contact
     */
    public function setAdreseContact($adreseContact)
    {
        $this->adreseContact = $adreseContact;

        return $this;
    }

    /**
     * Get adreseContact
     *
     * @return string
     */
    public function getAdreseContact()
    {
        return $this->adreseContact;
    }

    /**
     * Set cPContact
     *
     * @param string $cPContact
     *
     * @return Contact
     */
    public function setCPContact($cPContact)
    {
        $this->cPContact = $cPContact;

        return $this;
    }

    /**
     * Get cPContact
     *
     * @return string
     */
    public function getCPContact()
    {
        return $this->cPContact;
    }

    /**
     * Set villeContact
     *
     * @param string $villeContact
     *
     * @return Contact
     */
    public function setVilleContact($villeContact)
    {
        $this->villeContact = $villeContact;

        return $this;
    }

    /**
     * Get villeContact
     *
     * @return string
     */
    public function getVilleContact()
    {
        return $this->villeContact;
    }

    /**
     * Set telFixeContact
     *
     * @param string $telFixeContact
     *
     * @return Contact
     */
    public function setTelFixeContact($telFixeContact)
    {
        $this->telFixeContact = $telFixeContact;

        return $this;
    }

    /**
     * Get telFixeContact
     *
     * @return string
     */
    public function getTelFixeContact()
    {
        return $this->telFixeContact;
    }

    /**
     * Set telMobileContact
     *
     * @param string $telMobileContact
     *
     * @return Contact
     */
    public function setTelMobileContact($telMobileContact)
    {
        $this->telMobileContact = $telMobileContact;

        return $this;
    }

    /**
     * Get telMobileContact
     *
     * @return string
     */
    public function getTelMobileContact()
    {
        return $this->telMobileContact;
    }

    /**
     * Set idContact
     *
     * @param integer $idContact
     *
     * @return Contact
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact
     *
     * @return integer
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    public function toString() {
      $str = "Contact - [ ";
      $str .= "nomContact: " . (($this->getNomContact() != null) ? $this->getNomContact() : "");
      $str .= ", prenomContact: " . (($this->getPrenomContact() != null) ? $this->getPrenomContact() : "");
      $str .= ", adresseContact: " . (($this->getAdresseContact() != null) ? $this->getAdresseContact() : "");
      $str .= ", CPContact: " . (($this->getCPContact() != null) ? $this->getCPContact() : "");
      $str .= ", villeContact: " . (($this->getVilleContact() != null) ? $this->getVilleContact() : "");
      $str .= ", telFixeContact: " . (( $this->getTelFixeContact() != null) ? $this->getTelFixeContact() : "");
      $str .= ", telMobileContact: " . (( $this->getTelMobileContact() != null) ? $this->getTelMobileContact() : "");
      $str .= ", idContact: " . (( $this->getIdContact() != null) ? $this->getIdContact() : "");
      $str .= " ]";
      return str;
    }
}
