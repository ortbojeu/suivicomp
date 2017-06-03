<?php

namespace AppBundle\Entity;

/**
 * Users
 */
class Users
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $rememberToken;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $cP;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var \Date
     */
    private $dob;


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
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Users
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set rememberToken
     *
     * @param string $rememberToken
     *
     * @return Users
     */
    public function setRememberToken($rememberToken)
    {
        $this->rememberToken = $rememberToken;

        return $this;
    }

    /**
     * Get rememberToken
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->rememberToken;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Users
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Users
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cP
     *
     * @param string $cP
     *
     * @return Users
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Users
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Users
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set dob
     *
     * @param \Date $dob
     *
     * @return Users
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \Date
     */
    public function getDob()
    {
        return $this->dob;
    }

    // public function toString() {
    //   $str = "User - [ ";
    //   $str .= "id : " . (($this->getId() != null) ? $this->getId() : "");
    //   $str .= ", name : " . (($this->getName() != null) ? $this->getName() : "");
    //   $str .= ", role : " . (($this->getRole() != null) ? $this->getRole() : "");
    //   $str .= ", email : " . (($this->getEmail() != null) ? $this->getEmail() : "");
    //   $str .= ", password : " . (($this->getPassword() != null) ? $this->getPassword() : "");
    //   $str .= ", rememberToken : " . (($this->getRememberToken() != null) ? $this->getRememberToken() : "");
    //   $str .= ", createdAt : " . (($this->getCreatedAt() != null) ? $this->getCreatedAt() : "");
    //   $str .= ", updatedAt : " . (($this->getUpdatedAt() != null) ? $this->getUpdatedAt() : "");
    //   $str .= ", nom : " . (($this->getNom() != null) ? $this->getNom() : "");
    //   $str .= ", prenom : " . (($this->getPrenom() != null) ? $this->getPrenom() : "");
    //   $str .= ", adresse : " . (($this->getAdresse() != null) ? $this->getAdresse() : "");
    //   $str .= ", CP : " . (($this->getCP() != null) ? $this->getCP() : "");
    //   $str .= ", ville : " . (($this->getVille() != null) ? $this->getVille() : "");
    //   $str .= ", telephone : " . (($this->getTelephone() != null) ? $this->getTelephone() : "");
    //   $str .= ", dob : " . (($this->getDob() != null) ? $this->getDob() : "");
    //   $str .= " ]";
    //   return $str;
    // }
    //
    // public function checkUsers(Users $users) {
    //   $usersPwd = $users->getPassword();
    //   $usersEmail = $users->getEmail();
    //   $testExists = ($this->getEmail() == $usersEmail && $this->getPassword() == $usersPwd);
    //   return $testExists;
    // }
}
