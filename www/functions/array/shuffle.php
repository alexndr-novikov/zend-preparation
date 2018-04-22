<?php use \Doc\helpers\HTML;

HTML::h1('shuffle()');

$array = [10 => 9, 8, 6, 5, 'qwerty' => 4, 3, 32, 1];
shuffle($array);
HTML::pre($array);
shuffle($array);
HTML::pre($array);

$notArray = '';
var_dump(shuffle($notArray)); // Warning + false
