<?php use \Doc\helpers\HTML;
HTML::h1('array_merge()');

$arr1 = [];
$arr2 = [1, 2, 3];
$arr3 = ['a', 'b', 'c', 'key' => 'value'];
$arr4 = ['a', 'c', 'key' => 'not_value'];

HTML::pre(array_merge($arr1, $arr2));
HTML::pre(array_merge($arr2, $arr3));
HTML::pre(array_merge($arr3, $arr4));
HTML::pre(array_merge($arr1, $arr2, $arr3, $arr4));