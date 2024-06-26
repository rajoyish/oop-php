<?php
require_once 'Product.php';

$product = new Product('Acme', 'Radio Knob');
print $product->name . PHP_EOL;

try {
//  $product->foo = 6;
  $product->rating = 6;
  print 'Rating: ' . $product->rating . PHP_EOL;
} catch (BadMethodCallException $exception) {
  print $exception->getMessage() . PHP_EOL;
}
