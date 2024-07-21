<?php

require_once 'vendor/autoload.php';

//class ExampleObject
//{
//    public string $prop1 = 'Prop 1';
//
//    public string $prop2 = 'Prop 2';
//
//    public string $prop3 = 'Prop 3';
//
//    protected string $prop4 = 'Prop 4';
//
//    protected string $prop5 = 'Prop 5';
//}
//
//$object = new ExampleObject();
//
//foreach ($object as $item => $value) {
//    echo $value.PHP_EOL;
//}

class IterableDemoClass implements Iterator
{
    private array $sizes = ['Small', 'Medium', 'Large'];

    private int $index = 0;

    public function current(): mixed
    {
        echo __FUNCTION__.PHP_EOL;

        return $this->sizes[$this->index];
    }

    public function next(): void
    {
        echo __FUNCTION__.PHP_EOL;
        $this->index++;
    }

    public function key(): mixed
    {
        echo __FUNCTION__.PHP_EOL;

        return $this->index;
    }

    public function valid(): bool
    {
        echo __FUNCTION__.PHP_EOL;

        return isset($this->sizes[$this->index]);
    }

    public function rewind(): void
    {
        echo __FUNCTION__.PHP_EOL;
        $this->index = 0;
    }
}

$iteratorDemo = new IterableDemoClass();

function iterate_things(iterable $iterableObj)
{
    foreach ($iterableObj as $item => $value) {
        echo "$item:$value".PHP_EOL;
    }
}

iterate_things($iteratorDemo);
