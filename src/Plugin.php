<?php

declare(strict_types=1);

namespace Jascha030\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

final class Plugin implements PluginInterface
{
    private Composer $composer;

    private IOInterface $IO;

    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->IO       = $io;
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        // TODO: Implement deactivate() method.
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        // TODO: Implement uninstall() method.
    }
}
