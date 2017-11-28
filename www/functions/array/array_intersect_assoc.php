<?php use \Doc\helpers\HTML;
HTML::h1('array_intersect_assoc()');


$array1 = ['a' => 'green', 2 => 'brown', 5 => 'yellow', 'some', 'value'];
$array2 = ['a' => 'green', 100 => 'some', 'key' => 'vl', 'value', 5 => 'yellow'];
$array3 = ['a' => 'green', 100 => 'some', 'qwerty' => 'qwerty', 'value', 5 => 'yellow'];

HTML::pre(array_intersect_assoc($array1, $array2, $array3));