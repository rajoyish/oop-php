<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name = 'Tyres', $price = 100)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor = 1, $currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product(price: 80);
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;