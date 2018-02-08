<?php

namespace BootIq\CmsApiVendor\Nette\DI;

use Nette\DI\Compiler;
use Nette\DI\CompilerExtension;

final class CmsApiVendorExtension extends CompilerExtension
{

    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function loadConfiguration()
    {
        $builder = $this->getContainerBuilder();

        Compiler::loadDefinitions(
            $builder,
            $this->loadFromFile(__DIR__ . '/../../config/services.neon')['services'],
            $this->name
        );
    }
}
