<?php
require_once 'Product.php';

interface ProductWriter
{
  public function write(Product $product): string;
}
