<?php

declare(strict_types=1);

namespace Jascha030\TemplateInstaller\Composer\Capability;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability
{
    public function getCommands(): array
    {
        return [];
    }
}
