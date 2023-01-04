<?php

declare(strict_types=1);

namespace Jascha030\TemplateInstaller\Composer\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

final class Plugin implements PluginInterface
{
    /**
     * {@inheritDoc}
     */
    public function activate(Composer $composer, IOInterface $io): void
    {
        $composer
            ->getInstallationManager()
            ->addInstaller(new ProjectTemplateInstaller($io, $composer));
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        // noop
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        // noop
    }
}
