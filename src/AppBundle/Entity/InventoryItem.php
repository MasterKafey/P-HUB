<?php

namespace AppBundle\Entity;

/**
 * InventoryItem
 */
abstract class InventoryItem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Inventory
     */
    private $inventory;

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
     * Set inventory.
     *
     * @param Inventory $inventory
     * @return InventoryItem
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;

        return $this;
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
}
