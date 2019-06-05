<?php

namespace AppBundle\Entity;

/**
 * PersonageModel
 */
class PersonageModel
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
     * @var InventoryModel
     */
    private $inventory;

    /**
     * @var bool
     */
    private $special;

    /**
     * @var File
     */
    private $avatar;

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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return PersonageModel
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
     * @return InventoryModel
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Set inventory.
     *
     * @param Inventory $inventory
     * @return PersonageModel
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
     * @return PersonageModel
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get avatar.
     *
     * @return File
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set avatar.
     *
     * @param File $avatar
     * @return PersonageModel
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function __clone()
    {
        $this->id = null;
    }
}
