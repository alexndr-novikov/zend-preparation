<?php
include_once 'autoloadClasses' . DIRECTORY_SEPARATOR . 'AnotherTest.php';

spl_autoload_register(function ($class_name) {
    echo '<br>triggered autoloader<br>';
    @include_once 'autoloadClasses' . DIRECTORY_SEPARATOR . $class_name . '.php';
});

spl_autoload_register(function ($class_name) {
    echo '<br>triggered second autoloader<br>';
    @include_once 'autoloadClasses/dir/' . DIRECTORY_SEPARATOR . $class_name . '.php';
});

?><h1>Autoloading Classes</h1><?php

echo 'Use manually included class:';\Doc\helpers\HTML::br();

$obj1 = new AnotherTest; // autoload not triggered - included manually

echo 'Load first class:';\Doc\helpers\HTML::br();
$obj = new Test;

var_dump($obj); // autoload triggered
\Doc\helpers\HTML::br();
echo 'Load second class:';\Doc\helpers\HTML::br();
$obj2 = new SecondAutoloaderTest;
var_dump($obj2); // second autoload triggered

//    $obj3 = new NonExistingClass; // causes fatal error