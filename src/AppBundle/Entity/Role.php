<?php

namespace AppBundle\Entity;

/**
 * Role
 */
class Role extends \Symfony\Component\Security\Core\Role\Role
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $creator;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $access;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;


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

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Role
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
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
