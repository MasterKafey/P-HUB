<?php

namespace AppBundle\Entity;

/**
 * InventoryModel
 */
class InventoryModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var ItemModel[]
     */
    private $items;

    /**
     * @var PersonageModel
     */
    private $personageModel;

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
     * Get items.
     *
     * @return ItemModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set items.
     *
     * @param ItemModel $items
     * @return InventoryModel
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
     * @return InventoryModel
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
     * @return InventoryModel
     */
    public function removeItem($item)
    {
        $this->items->remove($item);

        return $this;
    }

    /**
     * Set personageModel.
     *
     * @param PersonageModel $personageModel
     *
     * @return InventoryModel
     */
    public function setPersonageModel($personageModel)
    {
        $this->personageModel = $personageModel;

        return $this;
    }

    /**
     * Get personageModel.
     *
     * @return PersonageModel
     */
    public function getPersonageModel()
    {
        return $this->personageModel;
    }

    public function __clone()
    {
        $this->id = null;
    }
}
