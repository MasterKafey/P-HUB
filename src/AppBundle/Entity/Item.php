<?php

namespace AppBundle\Entity;

/**
 * Item
 */
class Item extends InventoryItem
{

    /**
     * @var ItemModel
     */
    private $model;

    /**
     * Set model.
     *
     * @param ItemModel $model
     *
     * @return Item
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return ItemModel
     */
    public function getModel()
    {
        return $this->model;
    }
}
