<?php

declare(strict_types=1);

namespace SlimcmsAdminPanel\Controllers;

use DI\Annotation\Inject;

class ModuleController
{
    /**
     * @Inject()
     */
    protected $viewer;

    public function show_modules(): string
    {
        global $core;

        return $this->viewer->html('admin/show_modules', [
            'modules' => $core->moduleManager->getInfoModules(),
        ]);
    }
}
