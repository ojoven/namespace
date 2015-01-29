<?php

// Auto Load
require_once 'SplClassLoader.php';
function __autoload($class) {
    $loader = new SplClassLoader();
    $loader->loadClass($class);
}

// Using a class on the global namespace
$class = new AppClass();

// We can instantiate an object by passing the namespace directly to its declaration
$car = new Models\Car();

// Or we can tell PHP to use the namespace
use Controllers\Driver;
$car = new Driver();
