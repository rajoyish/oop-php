<?php

namespace App;

interface ContentFilterStrategyInterface
{
    public function filter(string $content): string;
}
