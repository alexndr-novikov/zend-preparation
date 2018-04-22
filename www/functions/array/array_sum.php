<?php use \Doc\helpers\HTML;

HTML::h1('array_sum()');


$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
HTML::p(array_sum($array));
HTML::p(array_sum([]));
HTML::p(array_sum([true, true, false, false]));
