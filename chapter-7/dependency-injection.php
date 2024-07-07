<?php

use App\EmailNotifier;
use App\Order;
use App\OrderController;

require_once 'vendor/autoload.php';

$order = new Order();
$orderController = new OrderController();
//$notifier = new SmsNotifier();
$notifier = new EmailNotifier();
$orderController->create($order, $notifier);
