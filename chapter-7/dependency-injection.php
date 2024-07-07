<?php

use App\Order;
use App\OrderController;
use App\SmsNotifier;

require_once 'vendor/autoload.php';

$order = new Order();
$orderController = new OrderController();
$orderController->create($order, new SmsNotifier());
