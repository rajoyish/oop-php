<?php

use App\Event\OrderPlaced;
use App\Listener\OrderLogger;
use App\Listener\OrderNotificationMailer;
use App\Order;

require_once 'vendor/autoload.php';

//$listener = function (Order $order) {
//    echo 'Sending confirmation to '.$order->getOrderer().PHP_EOL;
//};

$listener = fn ($order) => print 'Sending confirmation to '.$order->getOrderer().PHP_EOL;

$order = new Order();

$orderPlacedEvent = new OrderPlaced();

//$orderPlacedEvent->registerListener(function (Order $order) {
//    echo 'Sending confirmation to '.$order->getOrderer().PHP_EOL;
//});

$orderPlacedEvent->registerListener([new OrderNotificationMailer(), 'send']);

$orderPlacedEvent->registerListener(fn ($order) => print 'Sending confirmation to '.$order->getOrderer().PHP_EOL);

$orderPlacedEvent->registerListener(new OrderLogger());

$orderPlacedEvent->trigger($order);
