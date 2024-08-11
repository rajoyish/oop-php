<?php

use App\DTO\UserRegistration;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration('Rajesh', 'rajesh@mail.com');
$userRegistration->email = 'info@example.com';
dump($userRegistration);
