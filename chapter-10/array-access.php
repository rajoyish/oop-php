<?php

require_once 'vendor/autoload.php';

class DataContainer implements ArrayAccess
{
    private array $items = [];

    public function offsetExists(mixed $offset): bool
    {
        echo 'Checking if '.$offset.' is set'.PHP_EOL;

        return isset($this->items[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        echo 'Getting '.$offset.PHP_EOL;

        return $this->items[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset) {
            echo 'Setting '.$offset.PHP_EOL;
            $this->items[$offset] = $value;
        } else {
            $this->items[] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        echo 'Unsetting '.$offset.PHP_EOL;
        unset($this->items[$offset]);
    }
}

$demoObject = new DataContainer();
dump(isset($demoObject['random-key']));

$demoObject['product_name'] = 'Shoes';
dump($demoObject['product_name']);

unset($demoObject['Toothbrush']);
