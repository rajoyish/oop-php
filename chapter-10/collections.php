<?php

use App\City;
use App\Collection;

require_once 'vendor/autoload.php';

$cities = [
    'tokyo' => new City(name: 'Tokyo', country: 'Japan', population: 37_400_000),
    'delhi' => new City(name: 'Delhi', country: 'India', population: 30_290_000),
    'shanghai' => new City(name: 'Shanghai', country: 'China', population: 27_058_000),
    'sao_paulo' => new City(name: 'São Paulo', country: 'Brazil', population: 22_043_000),
    'mexico_city' => new City(name: 'Mexico City', country: 'Mexico', population: 21_782_000),
    'cairo' => new City(name: 'Cairo', country: 'Egypt', population: 20_901_000),
    'mumbai' => new City(name: 'Mumbai', country: 'India', population: 20_411_000),
    'beijing' => new City(name: 'Beijing', country: 'China', population: 20_384_000),
    'dhaka' => new City(name: 'Dhaka', country: 'Bangladesh', population: 20_283_000),
    'osaka' => new City(name: 'Osaka', country: 'Japan', population: 19_165_000),
];

$citiesCollection = new Collection($cities);

echo count($citiesCollection).PHP_EOL;

$citiesCollection->remove('mumbai');

$citiesCollection->set('kathmandu', new City(name: 'Kathmandu', country: 'Nepal', population: 1_442_000));

dump(
    $citiesCollection->toArray(),
    $citiesCollection->getKeys(),
    $citiesCollection->first(),
    $citiesCollection->last(),
    $citiesCollection->count()
);
