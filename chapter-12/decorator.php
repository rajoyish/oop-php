<?php

use App\ExecutiveSuiteDecorator;
use App\LateCheckoutDecorator;
use App\MembershipDecorator;
use App\Reservation;

require_once 'vendor/autoload.php';

$reservation = new Reservation;
echo $reservation->calculateCost().PHP_EOL; // 10

$executiveSuiteReservation = new ExecutiveSuiteDecorator($reservation);
echo $executiveSuiteReservation->calculateCost().PHP_EOL; // 15

$lateCheckoutReservation = new LateCheckoutDecorator($reservation);
echo $lateCheckoutReservation->calculateCost().PHP_EOL; // 12

$membershipReservation = new MembershipDecorator($reservation);
echo $membershipReservation->calculateCost().PHP_EOL; // 5
