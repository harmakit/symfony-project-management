<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \AppBundle\Entity\Role
     */
    private $createdRoles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accessRoles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accessRoles = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return md5(random_bytes(50));
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createdRoles
     *
     * @param \AppBundle\Entity\Role $createdRoles
     *
     * @return User
     */
    public function setCreatedRoles(\AppBundle\Entity\Role $createdRoles = null)
    {
        $this->createdRoles = $createdRoles;

        return $this;
    }

    /**
     * Get createdRoles
     *
     * @return \AppBundle\Entity\Role
     */
    public function getCreatedRoles()
    {
        return $this->createdRoles;
    }

    /**
     * Add accessRole
     *
     * @param \AppBundle\Entity\Role $accessRole
     *
     * @return User
     */
    public function addAccessRole(\AppBundle\Entity\Role $accessRole)
    {
        $this->accessRoles[] = $accessRole;

        return $this;
    }

    /**
     * Remove accessRole
     *
     * @param \AppBundle\Entity\Role $accessRole
     */
    public function removeAccessRole(\AppBundle\Entity\Role $accessRole)
    {
        $this->accessRoles->removeElement($accessRole);
    }

    /**
     * Get accessRoles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccessRoles()
    {
        return $this->accessRoles;
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return array('ROLE_USER');
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return [
            'ROLE_USER'
        ];
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
    }
}
