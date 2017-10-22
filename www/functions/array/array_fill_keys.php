<?php use \Doc\helpers\HTML;
HTML::h1('array_fill_keys()');

class Foo
{

}

$array = [1, 100, '2', 'one', 'hundred'];

HTML::pre(array_fill_keys($array, new Foo)); // 2 is integer key now