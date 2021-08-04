<?php

namespace Pbrilius\GetnoteLocalhost\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $id;

    /**
         * @var ArrayCollection
     */
    private $notes;

    public function __construct()
    {
      $this->notes = new ArrayCollection();
    }


    /**
     * Set email.
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
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set hash.
     *
     * @param string $hash
     *
     * @return User
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
