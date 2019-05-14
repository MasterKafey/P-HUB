<?php

namespace AppBundle\Service\Business;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Yaml\Yaml;
class NavBarBusiness
{
    const SIDEBAR_DIRECTORY_PATH = '@AppBundle/Resources/config/navbar/';

    private $kernel;
    private $router;

    public function __construct(KernelInterface $kernel, RouterInterface $router)
    {
        $this->kernel = $kernel;
        $this->router = $router;
    }

    public function getTabulations($path)
    {
        $fullPath = $this->getConfigurationPath($path);
        $file = $this->kernel->locateResource($fullPath);
        return Yaml::parseFile($file);
    }

    private function getConfigurationPath($path)
    {
        return self::SIDEBAR_DIRECTORY_PATH . $path;
    }

    public function getRouteNavBarTabulations($router)
    {
        return $this->router->getRouteCollection()->get($router)->getOptions()['navbar'] ?? [];
    }
}
