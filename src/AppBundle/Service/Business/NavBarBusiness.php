<?php

namespace AppBundle\Service\Business;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Yaml\Yaml;
class NavBarBusiness
{
    const SIDEBAR_DIRECTORY_PATH = '@AppBundle/Resources/config/navbar/';
    const EXTENSION_FILE = 'yml';

    private $kernel;
    private $router;
    private $request;
    private $registry;

    public function __construct(KernelInterface $kernel, RouterInterface $router, RequestStack $stack, RegistryInterface $registry)
    {
        $this->kernel = $kernel;
        $this->router = $router;
        $this->request = $stack->getMasterRequest();
        $this->registry = $registry;
    }

    public function getConfiguration($name)
    {
        return Yaml::parseFile($this->kernel->locateResource(self::SIDEBAR_DIRECTORY_PATH . $name . '.' . self::EXTENSION_FILE));
    }

    public function getTabulations($name)
    {
        return $this->getConfiguration($name);
    }

    public function routeNavBarTabulations()
    {
        $masterRequest = $this->request;
        $currentRoute = $masterRequest->attributes->get('_route');
        $params = $masterRequest->get('_route_params');
        $route = $this->router->getRouteCollection()->get($currentRoute);

        $items = $route->getOption('navbar');

        if (!$items) {
            return [];
        }

        $itemToReturn = [];

        foreach ($items as $item) {
            $parentId = null;
            if (isset($item['parent'])) {
                $parent = $item['parent'];
                $parentId = $this->registry->getRepository($item['entity'])
                    ->find($params['id'])
                    ->$parent()
                    ->getId();
            }

            $content = array_merge($item, [
                'id' => uniqid(),
            ]);
            if ($parentId) {
                $paramsCustom = array_merge($params, ['id' => $parentId]);
            } else {
                $paramsCustom = $params;
            }
            if (isset($item['items'])) {
                $subItems = [];
                foreach ($item['items'] as $subItem) {
                    $subItems[] = array_merge([
                        'url' => isset($subItem['route']) ? $this->router->generate($subItem['route'], $paramsCustom) : '#',
                    ], $subItem);
                }
                $content['items'] = $subItems;
            } else {
                $content['url'] = isset($item['route']) ? $this->router->generate($item['route'], $paramsCustom) : '#';
            }

            $itemToReturn[] = $content;
        }
        return $itemToReturn;
    }
}
