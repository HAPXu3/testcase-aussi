<?php

declare(strict_types = 1);

namespace App\Decorators;

class RemoveSymbolsProcessing extends BaseProcessing
{
    public function process(string $text): string
    {
        $text = parent::process($text);
        return preg_replace("/[\.,\/!@#\$%&\*\(\)]+/mu", '', $text);
    }
}
