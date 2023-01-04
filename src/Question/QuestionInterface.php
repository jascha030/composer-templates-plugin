<?php

declare(strict_types=1);

namespace Jascha030\TemplateInstaller\Composer\Question;

interface QuestionInterface
{
    public function getTemplateKey(): string;

    public function getDialog(): string;

    public function getAnswer(): string;

    public function getType();

    public static function set(string $key, string $dialog): self;
}
