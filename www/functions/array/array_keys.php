<?php use \Doc\helpers\HTML;

class ObjectHandler {}

HTML::h1('array_keys()');

$array = range(10, 20, 2);

HTML::pre(array_keys($array));

$array = [10 => 1 , 0, true, false, null, new ObjectHandler, '', 'qwerty'];

var_dump($array);
HTML::pre(array_keys($array, true)); // keys containing search value
HTML::pre(array_keys($array, true, true)); // keys containing search value using strict mode to compare