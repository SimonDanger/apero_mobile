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


    private  $user;
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

    private $nom;

    /**
     * @var string
     */
    private $date;

    /**
     * @var integer
     */
    private $nombreparticipant;


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
     * @param Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Soiree
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get users
     *
     * @return Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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


    /**
     * Set date
     *
     * @param \Datetime $date
     *
     * @return Soiree
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get nombreparticipant
     *
     * @return integer
     */
    public function getNombreparticipant()
    {
        return $this->nombreparticipant;
    }
    /**
     * Set nombreparticipant
     *
     * @param integer $nombreparticipant
     *
     * @return Soiree
     */

    public function setNombreparticipant($nombreparticipant)
    {
        $this->nombreparticipant = $nombreparticipant;

        return $this;
    }
}
