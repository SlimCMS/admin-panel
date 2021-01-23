<?php

declare(strict_types=1);

namespace SlimcmsAdminPanel;

use DI\Container;
use SlimCms\Module\Interfaces\ModuleInterface;
use SlimCms\Module\ModuleInfo;
use SlimCms\Route\Interfaces\RouterInterface;

/**
 * Class Module
 * @package Slimcms\AdminPanel
 */
class Module implements ModuleInterface
{
    /**
     * @inheritDoc
     */
    public function inject(Container $container): void
    {
        //
    }

    /**
     * @inheritDoc
     */
    public function info(): ModuleInfo
    {
        return new ModuleInfo(
            'Admin panel',
            'Admin panel for your website',
            'SlimCMS',
            'version'
        );
    }

    /**
     * @inheritDoc
     */
    public function routes(RouterInterface $router): void
    {
        $router->get('admin_module', function () {
            echo 'work';
        });
    }
}
