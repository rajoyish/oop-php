<?php

use App\Admin;
use App\AuthenticateUserInterface;
use App\User;
use App\UserFactory;

require_once 'vendor/autoload.php';

//$exists = class_exists('App\User');
$exists = class_exists(User::class);
//dd($exists);

$unknownUser = UserFactory::create(5, 'Anu');
$className = get_class($unknownUser);
//dd($className); // "App\User"
//dd($unknownUser::class); // "App\User"

$isUser = $unknownUser instanceof User;
//dd($isUser); // true

$admin = new Admin('5', 'Rajesh');
//$parentClass = get_parent_class($admin);
$parentClass = get_parent_class(Admin::class);
//dd($parentClass); // "App\User"

//$isSubclass = is_subclass_of($admin, User::class);
$isSubclass = is_subclass_of(Admin::class, User::class);
//dd($isSubclass); // true

$classImplements = class_implements($admin);
//dd($classImplements); // "App\AuthenticateUserInterface"

//$isUserInstance = is_a($admin, User::class);
//$isUserInstance = is_a($admin, Admin::class);
$isUserInstance = is_a($admin, AuthenticateUserInterface::class);
dd($isUserInstance); // true
