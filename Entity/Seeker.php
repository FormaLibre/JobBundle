<?php

namespace FormaLibre\JobBundle\Entity;

use Claroline\CoreBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="FormaLibre\JobBundle\Repository\SeekerRepository")
 * @ORM\Table(name="formalibre_jobbundle_seeker")
 */
class Seeker
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
     * @ORM\Column(name="registration_number")
     */
    protected $registrationNumber;


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

    function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }
}
