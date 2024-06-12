<?php
require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();
//print $baseObject->publicProperty . PHP_EOL;
//print $subObject->publicProperty . PHP_EOL;

//print $baseObject->getProtectedProperty() . PHP_EOL;
//print $subObject->getProtectedProperty() . PHP_EOL;
//print $subObject->getParentProtectedProperty() . PHP_EOL;

//print $baseObject->privateProperty . PHP_EOL; // NOT accessible
//print $baseObject->getPrivateProperty() . PHP_EOL;
//print $subObject->getParentPrivateProperty() . PHP_EOL;

print  $subObject->getParentProtectedProperty() . PHP_EOL;
