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
}
