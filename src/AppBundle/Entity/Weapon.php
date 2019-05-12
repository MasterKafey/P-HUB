<?php

namespace AppBundle\Entity;

/**
 * Weapon
 */
class Weapon
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 2;
    const STATUS_CORRUPTED = 3;
    const STATUS_DAMAGED = 4;

    public static $STATUS_TRANSLATION_KEY = array(
        self::STATUS_ENABLED => 'status.enabled',
        self::STATUS_DISABLED => 'status.disabled',
        self::STATUS_CORRUPTED => 'status.corrupted',
        self::STATUS_DAMAGED => 'status.damaged',
    );

    /**
     * @var int
     */
    private $id;

    /**
     * @var WeaponModel
     */
    private $model;

    /**
     * @var integer
     */
    private $status;

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
     * @param WeaponModel $model
     * @return Weapon
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return WeaponModel
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set status.
     *
     * @param integer $status
     * @return Weapon
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}
