<?php use \Doc\helpers\HTML;

HTML::h1('array_flip()');


$array = [1 => 2, '2' => '2'];

HTML::pre($array);
HTML::pre(array_flip($array));


var_dump(array_flip([1 => new \Faker\Factory()])); // warning + empty array
var_dump(array_flip([1 => new \Faker\Factory(), 2 => 2])); // warning + 2 => 2
HTML::pre(array_flip([1 => 1, 2 => '1'])); // 1 => 2

var_dump(array_flip('')); // NULL + warning
var_dump(@array_flip('')); // NULL
