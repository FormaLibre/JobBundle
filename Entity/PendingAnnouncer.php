<?php

namespace FormaLibre\JobBundle\Entity;

use Claroline\CoreBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="FormaLibre\JobBundle\Repository\PendingAnnouncerRepository")
 * @ORM\Table(name="formalibre_jobbundle_pending_announcer")
 */
class PendingAnnouncer
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="Claroline\CoreBundle\Entity\User"
     * )
     * @ORM\JoinColumn(name="user_id", onDelete="CASCADE")
     */
    protected $user;
    
    /**
     * @ORM\ManyToOne(
     *     targetEntity="FormaLibre\JobBundle\Entity\Community"
     * )
     * @ORM\JoinColumn(name="community_id", onDelete="CASCADE")
     */
    protected $community;

    /**
     * @ORM\Column(name="application_date", type="datetime")
     */
    protected $applicationDate;

    /**
     * @ORM\Column(nullable=true)
     */
    protected $offer;

    /**
     * @ORM\Column(name="original_name", nullable=true)
     */
    protected $originalName;

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getUser()
    {
        return $this->user;
    }

    function setUser(User $user)
    {
        $this->user = $user;
    }

    function getCommunity()
    {
        return $this->community;
    }

    function setCommunity(Community $community)
    {
        $this->community = $community;
    }

    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    public function setApplicationDate(\DateTime $applicationDate)
    {
        $this->applicationDate = $applicationDate;
    }

    function getOffer()
    {
        return $this->offer;
    }

    function setOffer($offer)
    {
        $this->offer = $offer;
    }

    function getOriginalName()
    {
        return $this->originalName;
    }

    function setOriginalName($originalName)
    {
        $this->originalName = $originalName;
    }
}