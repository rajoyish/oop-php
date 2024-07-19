<?php

require_once 'vendor/autoload.php';

// Compare with > and <
$today = new DateTime('now');
$saturday = date_create('saturday');
dump($today > $saturday);
dump($today < $saturday);
dump($today == $saturday);
dump($saturday === date_create('saturday'));

// Diff
$interval = $today->diff($saturday);
dump($interval);

$inThePast = date_create('1990-02-01');
$inTheFuture = date_create('now');
$intervalYears = $inThePast->diff($inTheFuture);
dump($intervalYears);

// invert
$invertYears = $inTheFuture->diff($inThePast);
dump($invertYears); // "invert": 1 => going to the past unless 0
