<?php

namespace AppBundle\Entity;

/**
 * InventorySettingsModel
 */
class InventorySettingsModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $itemNumber;

    /**
     * @var int|null
     */
    private $weaponNumber;

    /**
     * @var int|null
     */
    private $implantNumber;

    /**
     * @var int|null
     */
    private $size;


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
     * Set itemNumber.
     *
     * @param int|null $itemNumber
     *
     * @return InventorySettingsModel
     */
    public function setItemNumber($itemNumber = null)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Get itemNumber.
     *
     * @return int|null
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set weaponNumber.
     *
     * @param int|null $weaponNumber
     *
     * @return InventorySettingsModel
     */
    public function setWeaponNumber($weaponNumber = null)
    {
        $this->weaponNumber = $weaponNumber;

        return $this;
    }

    /**
     * Get weaponNumber.
     *
     * @return int|null
     */
    public function getWeaponNumber()
    {
        return $this->weaponNumber;
    }

    /**
     * Set implantNumber.
     *
     * @param int|null $implantNumber
     *
     * @return InventorySettingsModel
     */
    public function setImplantNumber($implantNumber = null)
    {
        $this->implantNumber = $implantNumber;

        return $this;
    }

    /**
     * Get implantNumber.
     *
     * @return int|null
     */
    public function getImplantNumber()
    {
        return $this->implantNumber;
    }

    /**
     * Set inventoryItemNumber.
     *
     * @param int|null $size
     *
     * @return InventorySettingsModel
     */
    public function setSize($size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
}
