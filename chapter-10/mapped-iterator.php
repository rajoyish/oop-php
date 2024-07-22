<?php

require_once 'vendor/autoload.php';

class MappedIteratorDemo implements Iterator
{
    public function __construct(private array $items = []) {}

    public function current(): mixed
    {
        return current($this->items);
    }

    public function next(): void
    {
        next($this->items);
    }

    public function key(): mixed
    {
        return key($this->items);
    }

    public function valid(): bool
    {
        return key($this->items) !== null;
    }

    public function rewind(): void
    {
        reset($this->items);
    }
}

$mappedArray = [
    'name' => 'Rajesh',
    'location' => 'Nepal',
    'role' => 'Software Developer',
];

$mappedIteratorDemo = new MappedIteratorDemo($mappedArray);
foreach ($mappedIteratorDemo as $item => $value) {
    echo "$item: $value".PHP_EOL;
}
