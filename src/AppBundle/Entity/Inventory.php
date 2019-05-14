<?php

namespace AppBundle\Entity;

/**
 * Inventory
 */
class Inventory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Player
     */
    private $personage;

    /**
     * @var InventoryItem[]
     */
    private $items;

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
     * Set personage.
     *
     * @param Personage $personage
     * @return Inventory
     */
    public function setPlayer($personage)
    {
        $this->personage = $personage;

        return $this;
    }

    /**
     * Get personage.
     *
     * @return Personage
     */
    public function getPersonage()
    {
        return $this->personage;
    }

    /**
     * Get items.
     *
     * @return InventoryItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set items.
     *
     * @param InventoryItem $items
     * @return Inventory
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Add item.
     *
     * @param InventoryItem $item
     * @return Inventory
     */
    public function addItem($item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item.
     *
     * @param InventoryItem $item
     * @return Inventory
     */
    public function removeItem($item)
    {
        $this->items->remove($item);

        return $this;
    }
}
