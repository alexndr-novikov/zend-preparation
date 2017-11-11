<?php use \Doc\helpers\HTML;
HTML::h1('key_exists()');

$dataFactory = \Faker\Factory::create();
$key1 = $dataFactory->numberBetween(1, 400);
$key2 = $dataFactory->numberBetween(1, 400);
$key3 = $dataFactory->numberBetween(1, 400);
$key4 = $dataFactory->numberBetween(1, 400);
$key5 = $dataFactory->numberBetween(1, 400);
$key6 = $dataFactory->numberBetween(1, 400);
$key7 = $dataFactory->numberBetween(1, 400);

$allKeys = [$key1, $key2, $key3, $key4, $key5, $key6, $key7];
HTML::pre($allKeys);

$someKeys = [$key1, $key2, $key3, $key4, $key6,]; // no 5 and 7 keys
$someKeys = array_flip($someKeys);

var_dump(key_exists($key1, $someKeys)); // true
var_dump(key_exists($key2, $someKeys)); // true
var_dump(key_exists($key3, $someKeys)); // true
var_dump(key_exists($key4, $someKeys)); // true
var_dump(key_exists($key5, $someKeys)); // false
var_dump(key_exists($key6, $someKeys)); // true
var_dump(key_exists($key7, $someKeys)); // false

HTML::br();
HTML::br();
var_dump(key_exists(null, $someKeys)); // false
var_dump(key_exists($dataFactory, $someKeys)); // false + warning

HTML::br();HTML::br();
class Foo
{
    public $bar;
}

var_dump(key_exists('bar', new Foo)); // true, but don't use it