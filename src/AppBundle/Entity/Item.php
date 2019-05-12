<?php

namespace AppBundle\Entity;

/**
 * Item
 */
class Item
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var ItemModel
     */
    private $model;

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
