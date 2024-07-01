<?php
//$simpleAutoload = function (string $className) {
//  $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
//
//  if (file_exists("{$className}.php")) {
//    require_once "{$className}.php";
//  }
//};

//spl_autoload_register($simpleAutoload);
spl_autoload_register();
