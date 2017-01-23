<?php

namespace Utilisateur\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table(name="candidature", indexes={@ORM\Index(name="candidat", columns={"candidat", "annonces"}), @ORM\Index(name="annonces", columns={"annonces"}), @ORM\Index(name="IDX_E33BD3B86AB5B471", columns={"candidat"})})
 * @ORM\Entity
 */
class Candidature
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
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \Utilisateur\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidat", referencedColumnName="id")
     * })
     */
    private $candidat;

    /**
     * @var \Utilisateur\Entity\Annonces
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur\Entity\Annonces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="annonces", referencedColumnName="id")
     * })
     */
    private $annonces;



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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Candidature
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set candidat
     *
     * @param \Utilisateur\Entity\Users $candidat
     *
     * @return Candidature
     */
    public function setCandidat(\Utilisateur\Entity\Users $candidat = null)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return \Utilisateur\Entity\Users
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set annonces
     *
     * @param \Utilisateur\Entity\Annonces $annonces
     *
     * @return Candidature
     */
    public function setAnnonces(\Utilisateur\Entity\Annonces $annonces = null)
    {
        $this->annonces = $annonces;

        return $this;
    }

    /**
     * Get annonces
     *
     * @return \Utilisateur\Entity\Annonces
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }
}
