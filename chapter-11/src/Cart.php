<?php

namespace App;

class Cart
{
    public static float $tax = 1.2;

    public float $price;

    public function getNetPrice(): int|float
    {
        return $this->price * self::$tax;
    }

    public function addToPrice(int|float $amount): void
    {
        $this->price += $amount;
    }
}
