<?php

declare(strict_types=1);

namespace Jascha030\TemplateInstaller\Composer\Installer;

use Composer\Installer\BinaryInstaller;
use Composer\Installer\LibraryInstaller;
use Composer\IO\IOInterface;
use Composer\PartialComposer;
use Composer\Util\Filesystem;

class ProjectTemplateInstaller extends LibraryInstaller
{
    public function __construct(
        IOInterface      $io,
        PartialComposer  $composer,
        ?string          $type = 'library',
        ?Filesystem      $filesystem = null,
        ?BinaryInstaller $binaryInstaller = null
    )
    {
        parent::__construct(
            $io,
            $composer,
            $type,
            $filesystem,
            $binaryInstaller
        );
    }
}
