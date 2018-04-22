<?php use \Doc\helpers\HTML;

HTML::h1('array_intersect_key()');

$arr1 = array_combine(range('a', 'g'), range(0, 6));
$arr2 = array_combine(range('a', 'd'), range(0, 3));
$arr3 = array_combine(range('c', 'f'), range(0, 3));

HTML::pre($arr1);
HTML::pre($arr2);
HTML::pre($arr3);
HTML::pre(array_intersect_key($arr1, $arr2, $arr3));
