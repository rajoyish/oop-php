<?php

require_once 'vendor/autoload.php';
// Create a DateTime using new DateTime without args
$dateTime = new DateTime();
dump($dateTime);

// format date
$formatDate = $dateTime->format('d-M-Y');
dump($formatDate);

// Create a DateTime using a date
$createDateTime = new DateTime('19-Jul-2024');
dump($createDateTime);

// Create using human-readable
$nextMonday = new DateTime('next monday');
dump($nextMonday);

// Create using date_create()
$createTodayDate = date_create();
$nextWed = date_create('next wed');
dump($createTodayDate);
dump($nextWed);

// Create for different TZ
$kathmandu = new DateTime('now', new DateTimeZone('Asia/Kathmandu'));
$newYork = new DateTime('now', new DateTimeZone('America/New_York'));
dump($kathmandu, $newYork);
