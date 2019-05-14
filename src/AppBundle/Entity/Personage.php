<?php

namespace AppBundle\Entity;

/**
 * Personage
 */
class Personage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var integer
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
     * @var Inventory
     */
    private $inventory;

    /**
     * @var bool
     */
    private $special;

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
     * Set pseudo.
     *
     * @param string $pseudo
     *
     * @return Personage
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
     * @return Personage
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
     * @return Personage
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
     * @return Personage
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
     * @return Personage
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
     * @return Personage
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
     * @return Personage
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
     * @return Personage
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
     * Get inventory.
     *
     * @return Inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Set inventory.
     *
     * @param Inventory $inventory
     * @return Personage
     */
    public function setInventory(Inventory $inventory)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get special.
     *
     * @return bool
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set special.
     *
     * @param bool $special
     *
     * @return Personage
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }
}
