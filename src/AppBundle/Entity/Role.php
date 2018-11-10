<?php

namespace AppBundle\Entity;

/**
 * Role
 */
class Role
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $accessType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accessType
     *
     * @param integer $accessType
     *
     * @return Role
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;

        return $this;
    }

    /**
     * Get accessType
     *
     * @return int
     */
    public function getAccessType()
    {
        return $this->accessType;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $project;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->project = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \AppBundle\Entity\Project $project
     *
     * @return Role
     */
    public function addProject(\AppBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \AppBundle\Entity\Project $project
     */
    public function removeProject(\AppBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProject()
    {
        return $this->project;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;


    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Role
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $creator;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projects;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;


    /**
     * Add creator
     *
     * @param \AppBundle\Entity\User $creator
     *
     * @return Role
     */
    public function addCreator(\AppBundle\Entity\User $creator)
    {
        $this->creator[] = $creator;

        return $this;
    }

    /**
     * Remove creator
     *
     * @param \AppBundle\Entity\User $creator
     */
    public function removeCreator(\AppBundle\Entity\User $creator)
    {
        $this->creator->removeElement($creator);
    }

    /**
     * Get creator
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
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
    /**
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $access;


    /**
     * Add access
     *
     * @param \AppBundle\Entity\Access $access
     *
     * @return Role
     */
    public function addAccess(\AppBundle\Entity\Access $access)
    {
        $this->access[] = $access;

        return $this;
    }

    /**
     * Remove access
     *
     * @param \AppBundle\Entity\Access $access
     */
    public function removeAccess(\AppBundle\Entity\Access $access)
    {
        $this->access->removeElement($access);
    }

    /**
     * Get access
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccess()
    {
        return $this->access;
    }
}
