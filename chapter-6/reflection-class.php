<?php

use App\Admin;

require_once 'vendor/autoload.php';

$adminClass = new ReflectionClass(Admin::class);
$className = $adminClass->getName();
//dd($className);

$shortName = $adminClass->getShortName();
//dd($shortName);

$params = $adminClass->getMethod('__construct')->getParameters();
//dd($params);

$methods = $adminClass->getMethods();
//dd($methods);
//dd($methods[2]);

$parentClass = $adminClass->getParentClass();
//dd($parentClass);

//dd($adminClass->getStartLine(), $adminClass->getEndLine());

$interfaces = $adminClass->getInterfaces();
dd($interfaces);
