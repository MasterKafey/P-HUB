<?php

namespace AppBundle\Entity;

/**
 * Player
 */
class Player
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var User
     */
    private $user;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var int
     */
    private $age;

    /**
     * @var int
     */
    private $money;

    /**
     * @var float
     */
    private $xp;

    /**
     * @var int
     */
    private $reputation;

    /**
     * @var int
     */
    private $honor;

    /**
     * @var int
     */
    private $corruption;

    /**
     * @var int
     */
    private $glory;

    /**
     * @var God
     */
    private $god;

    public function __construct()
    {
        $this->xp = 0;
        $this->corruption = 0;
        $this->glory = 0;
        $this->honor = 0;
        $this->money = 0;
        $this->reputation = 0;
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
     * Set pseudo.
     *
     * @param string $pseudo
     *
     * @return Player
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo.
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set age.
     *
     * @param int $age
     *
     * @return Player
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set money.
     *
     * @param int $money
     *
     * @return Player
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money.
     *
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set xp.
     *
     * @param float $xp
     *
     * @return Player
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp.
     *
     * @return float
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set reputation.
     *
     * @param int $reputation
     *
     * @return Player
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    /**
     * Get reputation.
     *
     * @return int
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * Set honor.
     *
     * @param int $honor
     *
     * @return Player
     */
    public function setHonor($honor)
    {
        $this->honor = $honor;

        return $this;
    }

    /**
     * Get honor.
     *
     * @return int
     */
    public function getHonor()
    {
        return $this->honor;
    }

    /**
     * Set corruption.
     *
     * @param int $corruption
     *
     * @return Player
     */
    public function setCorruption($corruption)
    {
        $this->corruption = $corruption;

        return $this;
    }

    /**
     * Get corruption.
     *
     * @return int
     */
    public function getCorruption()
    {
        return $this->corruption;
    }

    /**
     * Set glory.
     *
     * @param int $glory
     *
     * @return Player
     */
    public function setGlory($glory)
    {
        $this->glory = $glory;

        return $this;
    }

    /**
     * Get glory.
     *
     * @return int
     */
    public function getGlory()
    {
        return $this->glory;
    }

    /**
     * Set angel.
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
     * Get angel.
     *
     * @return God
     */
    public function getGod()
    {
        return $this->god;
    }
}
