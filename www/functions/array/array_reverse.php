<?php use \Doc\helpers\HTML;

HTML::h1('array_reverse()');


$array = [5 => 1, 2, 3, 4, 5, 6, 7, 8, 9];

HTML::pre($array);
HTML::pre(array_reverse($array));
HTML::pre(array_reverse($array, true));
