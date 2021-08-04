<?php

namespace Pbrilius\GetnoteLocalhost\Entity;

/**
 * Note
 */
class Note
{
    /**
     * @var json|null
     */
    private $tags;

    /**
     * @var string
     */
    private $blanket;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Pbrilius\GetnoteLocalhost\Entity\User
     */
    private $user;


    /**
     * Set tags.
     *
     * @param json|null $tags
     *
     * @return Note
     */
    public function setTags($tags = null)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags.
     *
     * @return json|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set blanket.
     *
     * @param string $blanket
     *
     * @return Note
     */
    public function setBlanket($blanket)
    {
        $this->blanket = $blanket;

        return $this;
    }

    /**
     * Get blanket.
     *
     * @return string
     */
    public function getBlanket()
    {
        return $this->blanket;
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

    /**
     * Set user.
     *
     * @param \Pbrilius\GetnoteLocalhost\Entity\User|null $user
     *
     * @return Note
     */
    public function setUser(\Pbrilius\GetnoteLocalhost\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \Pbrilius\GetnoteLocalhost\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
