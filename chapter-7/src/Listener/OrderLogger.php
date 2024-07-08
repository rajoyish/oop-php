<?php

namespace App\Listener;

use App\Order;

class OrderLogger
{
    public function __invoke(Order $order): void
    {
        echo 'Order being logged...'.PHP_EOL;
    }
}
