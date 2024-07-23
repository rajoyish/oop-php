<?php

require_once 'vendor/autoload.php';

class ExternalIterator implements IteratorAggregate
{
    public function __construct(private array $items = []) {}

    public function getIterator(): Traversable
    {
        echo __FUNCTION__.' called'.PHP_EOL;

        return new ArrayIterator($this->items);
    }
}

$mappedArray = [
    'name' => 'Rajesh',
    'location' => 'Nepal',
    'role' => 'Software Developer',
];

$externalIterator = new ExternalIterator($mappedArray);
foreach ($externalIterator as $item => $value) {
    echo "$item: $value".PHP_EOL;
}

$iterator = $externalIterator->getIterator();
dump($iterator['name']);
