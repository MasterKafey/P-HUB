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
     * @var string
     */
    private $name;

    /**
     * @var ItemModel[]
     */
    private $items;

    /**
     * @var PersonageModel
     */
    private $personageMode;

    /**
     * @var InventorySettingsModel
     */
    private $settings;

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
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param string $name
     * @return InventoryModel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * @param PersonageModel $personageMode
     *
     * @return InventoryModel
     */
    public function setPersonageMode($personageMode)
    {
        $this->personageMode = $personageMode;

        return $this;
    }

    /**
     * Get personageModel.
     *
     * @return PersonageModel
     */
    public function getPersonageMode()
    {
        return $this->personageMode;
    }

    /**
     * Get settings.
     *
     * @return InventorySettingsModel
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set settings.
     *
     * @param $settings
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;

        return $this;
    }
}
