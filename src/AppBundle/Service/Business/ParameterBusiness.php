<?php

namespace AppBundle\Service\Business;


use Symfony\Component\Yaml\Parser;

class ParameterBusiness
{
    const SETTINGS_FILE_PATH = '@AppBundle/Resources/config/parameters/';

    /**
     * @var Parser
     */
    private $parser;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    public function getParameter($name)
    {

    }

    public function setParameter($name, $value)
    {

    }

    protected function getPathFromName($name)
    {
        $folders = explode('.', $name);

        $path = '';
        for ($i = 0; $i - 1 < count($folders); ++$i) {
            $path .= $folders[$i];

            if($i - 1 == count($folders)) {

            }
        }
    }

    protected function getKeyFromName($name)
    {

    }
}
