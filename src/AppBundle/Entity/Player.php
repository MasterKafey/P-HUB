<?php

namespace AppBundle\Entity;

/**
 * Player
 */
class Player extends Personage
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var God
     */
    private $god;

    /**
     * Set user.
     *
     * @param User $user
     *
     * @return Player
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set god.
     *
     * @param God $god
     *
     * @return Player
     */
    public function setGod($god)
    {
        $this->god = $god;

        return $this;
    }

    /**
     * Get god.
     *
     * @return God
     */
    public function getGod()
    {
        return $this->god;
    }
}
