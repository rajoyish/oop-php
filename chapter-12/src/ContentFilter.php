<?php

namespace App;

class ContentFilter
{
    private ContentFilterStrategyInterface $filterStrategy;

    public function __construct(ContentFilterStrategyInterface $filterStrategy)
    {
        $this->filterStrategy = $filterStrategy;
    }

    public function filter($content): string
    {
        return $this->filterStrategy->filter($content);
    }
}
