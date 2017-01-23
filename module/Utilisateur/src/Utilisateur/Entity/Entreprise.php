<?php

namespace Utilisateur\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise", indexes={@ORM\Index(name="statut", columns={"statut"})})
 * @ORM\Entity
 */
class Entreprise
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", length=65535, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="recruteurs", type="string", length=255, nullable=false)
     */
    private $recruteurs;

    /**
     * @var \Utilisateur\Entity\StatutJuridique
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur\Entity\StatutJuridique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statut", referencedColumnName="id")
     * })
     */
    private $statut;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Entreprise
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Entreprise
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Entreprise
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
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Entreprise
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set recruteurs
     *
     * @param string $recruteurs
     *
     * @return Entreprise
     */
    public function setRecruteurs($recruteurs)
    {
        $this->recruteurs = $recruteurs;

        return $this;
    }

    /**
     * Get recruteurs
     *
     * @return string
     */
    public function getRecruteurs()
    {
        return $this->recruteurs;
    }

    /**
     * Set statut
     *
     * @param \Utilisateur\Entity\StatutJuridique $statut
     *
     * @return Entreprise
     */
    public function setStatut(\Utilisateur\Entity\StatutJuridique $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \Utilisateur\Entity\StatutJuridique
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
