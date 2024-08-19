<?php

use App\DTO\UserRegistration;
use App\Validation\Validator;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration('raje', 'rajesh@huesarrays.com');

$validator = new Validator;

$validator->validate($userRegistration);

$errors = $validator->getErrors();
dd($errors);
