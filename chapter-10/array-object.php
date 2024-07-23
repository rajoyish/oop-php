<?php

use App\City;

require_once 'vendor/autoload.php';

$cities = [
    new City(name: 'Tokyo', country: 'Japan', population: 37_400_000),
    new City(name: 'Delhi', country: 'India', population: 32_941_000),
    new City(name: 'Shanghai', country: 'China', population: 28_516_000),
    new City(name: 'São Paulo', country: 'Brazil', population: 22_043_000),
    new City(name: 'Mexico City', country: 'Mexico', population: 21_918_000),
];

$citiesObject = new ArrayObject($cities);

$citiesObject[] = new City(name: 'Kathmandu', country: 'Nepal', population: 1_442_000);

unset($citiesObject[0]);

foreach ($citiesObject as $city) {
    echo "{$city->getName()}: {$city->getPopulation()}".PHP_EOL;
}

echo count($citiesObject).PHP_EOL;
