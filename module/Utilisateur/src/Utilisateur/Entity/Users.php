<?php

namespace Utilisateur\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=16, nullable=false)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_postal", type="smallint", nullable=false)
     */
    private $codePostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_naissance", type="integer", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="accroche", type="text", length=65535, nullable=true)
     */
    private $accroche;

    /**
     * @var integer
     *
     * @ORM\Column(name="visites", type="integer", nullable=false)
     */
    private $visites = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="inscription", type="integer", nullable=false)
     */
    private $inscription;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;



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
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Users
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set dateNaissance
     *
     * @param integer $dateNaissance
     *
     * @return Users
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return integer
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Users
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set accroche
     *
     * @param string $accroche
     *
     * @return Users
     */
    public function setAccroche($accroche)
    {
        $this->accroche = $accroche;

        return $this;
    }

    /**
     * Get accroche
     *
     * @return string
     */
    public function getAccroche()
    {
        return $this->accroche;
    }

    /**
     * Set visites
     *
     * @param integer $visites
     *
     * @return Users
     */
    public function setVisites($visites)
    {
        $this->visites = $visites;

        return $this;
    }

    /**
     * Get visites
     *
     * @return integer
     */
    public function getVisites()
    {
        return $this->visites;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Users
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set inscription
     *
     * @param integer $inscription
     *
     * @return Users
     */
    public function setInscription($inscription)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return integer
     */
    public function getInscription()
    {
        return $this->inscription;
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
}
