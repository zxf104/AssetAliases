<?php

namespace AssetAliases\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AssetAliases\Config\AssetAliasesConfig;
use AssetAliases\View\Helper\HeadLink;

class HeadLinkFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $mainServiceLocator = $serviceLocator->getServiceLocator();
        $config = $mainServiceLocator->get('AssetAliases\Config\AssetAliasesConfig');
        $viewHelper = new HeadLink($config);
        return $viewHelper;
    }
}

