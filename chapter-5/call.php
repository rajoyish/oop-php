<?php
require_once 'Product.php';
require_once 'JsonProductWriter.php';

$writer = new JsonProductWriter();
$product = new Product(manufacturer: 'Acme', itemName: 'Radio Knob', productWriter: $writer);

print $product->write() . PHP_EOL;
