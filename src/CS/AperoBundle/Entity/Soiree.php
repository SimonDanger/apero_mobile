<?php

namespace CS\AperoBundle\Entity;

/**
 * Soiree
 */
class Soiree
{
    /**
     * @var integer
     */
    private $id;


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
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $paiement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $date;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Soiree
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set paiement
     *
     * @param integer $paiement
     *
     * @return Soiree
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get date
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date
     *
     * @param integer $date
     *
     * @return Soiree
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return integer
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Add user
     *
     * @param \CS\AperoBundle\Entity\User $user
     *
     * @return Soiree
     */
    public function addUser(\CS\AperoBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \CS\AperoBundle\Entity\User $user
     */
    public function removeUser(\CS\AperoBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function setUsers(\CS\AperoBundle\Entity\User $user)
    {
        $this->users->add($user);

        return $this;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Soiree
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
}
