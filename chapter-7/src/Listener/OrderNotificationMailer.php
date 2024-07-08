<?php

namespace App\Listener;

use App\Order;

class OrderNotificationMailer
{
    public function send(Order $order)
    {
        echo 'Order notification sent to '.$order->getOrderer().PHP_EOL;
    }
}
