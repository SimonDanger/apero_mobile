<?php

namespace CS\AperoBundle\Entity;

/**
 * User
 */
class User
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add participant
     *
     * @param \CS\AperoBundle\Entity\Soiree $participant
     *
     * @return User
     */
    public function addParticipant(\CS\AperoBundle\Entity\Soiree $participant)
    {
        $this->participants[] = $participant;

        return $this;
    }

    /**
     * Remove participant
     *
     * @param \CS\AperoBundle\Entity\Soiree $participant
     */
    public function removeParticipant(\CS\AperoBundle\Entity\Soiree $participant)
    {
        $this->participants->removeElement($participant);
    }

    /**
     * Get participants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipants()
    {
        return $this->participants;
    }
}
