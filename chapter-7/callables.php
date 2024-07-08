<?php

use App\Event\OrderPlaced;
use App\Order;

require_once 'vendor/autoload.php';

$listener = function (Order $order) {
    echo 'Sending confirmation to '.$order->getOrderer().PHP_EOL;
};

$order = new Order();

$orderPlacedEvent = new OrderPlaced();
$orderPlacedEvent->registerListener($listener);
$orderPlacedEvent->trigger($order);
