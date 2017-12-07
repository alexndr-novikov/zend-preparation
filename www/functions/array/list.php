<?php use \Doc\helpers\HTML;

HTML::h1('list()');


$array = [1, 2, 3];
list($one, $two, $three) = $array; // assign all

HTML::p("$three $two $one");

list(, , $newThree) = $array; // assign third
HTML::p($newThree);

list($newOne, $newTwo) = $array; // assign two first
HTML::p("$newOne $newTwo");

list($newOne) = 'qwerty'; // will provide null
var_dump($newOne);

list($a[0], $a[1], $a[2]) = $array;
var_dump($a); // PHP7 : 0 => 1, 1 => 2, 2 => 3, PHP5 2 => 3, 1 => 2, 0 => 1


$array = ['e' => 'e', 'q' => 'q'];

list('q' => $q, 'e' => $e) = $array;

var_dump($q, $e);