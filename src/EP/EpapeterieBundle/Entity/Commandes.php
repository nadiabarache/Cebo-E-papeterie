<?php

namespace EP\EpapeterieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table("commandes")
 * @ORM\Entity(repositoryClass="EP\EpapeterieBundle\Repository\CommandesRepository")
 */
class Commandes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



     /**
     * @ORM\ManyToOne(targetEntity = "Users\UtilisateurBundle\Entity\Utilisateurs",inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */

    private $utilisateurs;

    /**
     * Set utilisateurs
     *
     * @param \Users\UtilisateurBundle\Entity\Utilisateurs $utilisateurs
     * @return Commandes
     */
    public function setUtilisateurs(\Users\UtilisateurBundle\Entity\Utilisateurs $utilisateurs = null)
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return \Users\UtilisateurBundle\Entity\Utilisateurs
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }


    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @var array
     *
     * @ORM\Column(name="commande", type="array")
     */
    private $commande;


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
     * Set valider
     *
     * @param boolean $valider
     * @return Commandes
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commandes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     * @return Commandes
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set commande
     *
     * @param array $commande
     * @return Commandes
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return array
     */
    public function getCommande()
    {
        return $this->commande;
    }


}
