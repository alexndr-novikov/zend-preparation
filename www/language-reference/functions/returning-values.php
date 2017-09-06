<?php
declare(strict_types=1);
?><h1>Returning values</h1><?php


function noReturn()
{

}

var_dump(noReturn()); //null

// return by reference

class A
{
    public $a = 1;

    function &getA()
    {
        return $this->a;
    }
}

$obj = new A;
$a =& $obj->getA();
$a = 10;
var_dump($obj);

function voidFunc() : void {
    $a = 1 + 1;
    // return $a; //fatal error
}

voidFunc();

function stringFunction($a) : string
{
    return $a;
}
br();
var_dump(stringFunction('a'));
try {
    var_dump(stringFunction(1));
} catch (TypeError $e) {
    echo 'String return expected, got int'; br();
}

function stringFunctionUpdated($a) : string
{
    return (string)$a;
}

var_dump(stringFunctionUpdated('a'));
var_dump(stringFunctionUpdated(1));


class StaticFactory
{
    public static function createObject() : stdClass
    {
        return new stdClass();
    }
}

var_dump(StaticFactory::createObject());