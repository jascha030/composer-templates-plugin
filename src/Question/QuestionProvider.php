<?php

declare(strict_types=1);

namespace Jascha030\TemplateInstaller\Question;

use IteratorAggregate;
use Traversable;

abstract class QuestionProvider implements IteratorAggregate
{
    abstract public function getQuestions(): array;

    public function getIterator(): Traversable
    {
        yield from $this->getQuestions();
    }
}
