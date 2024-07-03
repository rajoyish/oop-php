<?php

use App\User;

require_once 'vendor/autoload.php';

$user = new User(5, 'Rajesh');

$classMethods = get_class_methods($user); // public methods only
//dd($classMethods);

//$methodExists = method_exists($user, 'getId');
//$methodExists = method_exists(User::class, 'getId');
//$methodExists = method_exists($user, 'getFoo');
$methodExists = method_exists($user, 'setPassword'); // private method also works
//dd($methodExists);

//$isCallable = is_callable([$user, 'getId']);
$isCallable = is_callable([$user, 'setPassword']);
//dd($isCallable);

$classProps = get_class_vars(User::class);
//dd($classProps);

$objectProps = get_object_vars($user);
dd($objectProps);
