<h1>Static Keyword</h1><?php

class StaticHolder
{
    public static $staticA = 'a';
    protected static $staticB = 'b';

    public static function getB()
    {
        return static::$staticB;
    }

    public static function setB($value)
    {
        return static::$staticB = $value;
    }
}

$obj = new StaticHolder();
var_dump(StaticHolder::$staticA);
br();
var_dump($obj::$staticA);
br();
var_dump(StaticHolder::getB());

$obj::setB('not b');
br();
var_dump(StaticHolder::getB());
$className = 'StaticHolder';
br();
var_dump($className::getB());
// var_dump(StaticHolder::$staticB); // causes an error
