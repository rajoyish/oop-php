<?php
class Product
{
    public $name = 'soap';
    public $price = 5;

}

$soapObject = new Product();
print $soapObject->name . "\n";

$soapObject->name = 'toothpaste';
print $soapObject->name . "\n";

$priceObject = new Product();
print $priceObject->price . "\n";

$priceObject->price = '10';
print $priceObject->price . "\n";
