<?php

namespace App;

class OrderController
{
    public function create(Order $order, NotifierInterface $notifier)
    {
        echo 'Saving order to database'.PHP_EOL;
        $customer = $order->getOrderer();

        $notifier->send($customer);
    }
}
