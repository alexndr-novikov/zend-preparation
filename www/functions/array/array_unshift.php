<?php use \Doc\helpers\HTML;

HTML::h1('array_​unshift()');


$array = [5 => 0, 1, 2, 'some_key' => 3, 4];
HTML::pre($array);
HTML::p(array_unshift($array, -2, -1)); // new count
HTML::pre($array);