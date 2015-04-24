<?php
// src/Acme/UserBundle/Entity/User.php

namespace Users\UtilisateurBundle\Entity;
//namespace Acme\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();

        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
    }



     /**
     * @ORM\OneToMany(targetEntity = "EP\EpapeterieBundle\Entity\Commandes",mappedBy="utilisateurs", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */

    private $commandes;

     /**
     * @ORM\OneToMany(targetEntity = "EP\EpapeterieBundle\Entity\UtilisateursAdresses",mappedBy="utilisateurs", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */

    private $adresses;



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
     * Add commandes
     *
     * @param \EP\EpapeterieBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\EP\EpapeterieBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \EP\EpapeterieBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\EP\EpapeterieBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adresses
     *
     * @param \EP\EpapeterieBundle\Entity\UtilisateursAdresses $adresses
     * @return Utilisateurs
     */
    public function addAdress(\EP\EpapeterieBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \EP\EpapeterieBundle\Entity\UtilisateursAdresses $adresses
     */
    public function removeAdress(\EP\EpapeterieBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
