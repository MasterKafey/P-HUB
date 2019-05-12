<?php

namespace AppBundle\Entity;

/**
 * Implant
 */
class Implant
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
     * @var ImplantModel
     */
    private $model;

    /**
     * @var int
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
     * @param ImplantModel $model
     * @return Implant
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return ImplantModel
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set status.
     *
     * @param int $status
     * @return Implant
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}
