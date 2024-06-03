<?php

class Product
{
    public $name = 'soap';
    public $price;

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;

        return $priceAsCurrency;
    }
}

$soapObject = new Product();
$soapObject->price = 550;
$priceAsCurrency = $soapObject->priceAsCurrency();

$soapObjectTwo = new Product();
$soapObjectTwo->price = 650;
$priceAsCurrency = $soapObjectTwo->priceAsCurrency();
var_dump($priceAsCurrency).PHP_EOL;