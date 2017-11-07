<?php use \Doc\helpers\HTML;
HTML::h1('array_​values()');

$array = ['qwerty' => 1, 10 => 2, 2, 3, 200 => 4, 3, 3, 2, '1', 7];
HTML::pre(array_values($array));