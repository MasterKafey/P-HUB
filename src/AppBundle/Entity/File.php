<?php

namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\File as HttpFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * File
 * @Vich\Uploadable
 */
class File
{
    /**
     * @var int
     */
    private $id;

    /**
     * @Vich\UploadableField(mapping="file", fileNameProperty="path")
     * @var HttpFile
     */
    private $file;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \DateTime
     */
    private $lastUpdate;


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
     * Set file.
     *
     * @param HttpFile $file
     * @return File
     */
    public function setFile($file)
    {
        $this->file = $file;
        if ($file) {
            $this
                ->setName($file->getFilename())
                ->setLastUpdate(new \DateTime())
            ;
        }

        return $this;
    }

    /**
     * Get file.
     *
     * @return HttpFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return File
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set path.
     *
     * @param string $path
     *
     * @return File
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set lastUpdate.
     *
     * @param \DateTime $lastUpdate
     *
     * @return File
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate.
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    public function __clone()
    {
        $this->id = null;
    }
}
