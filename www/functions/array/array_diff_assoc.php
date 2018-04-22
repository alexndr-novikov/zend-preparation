<?php use \Doc\helpers\HTML;

HTML::h1('array_diff_assoc()');
HTML::p('Key - value pairs');

$array1 = [1, 2, 3, 4, 5, 6, 7, 10 => 10];
$array2 = [1 => 1, 2, 3, 4, 5, 6, 7, 10];
$array3 = [1, 2 => 3, 4 => 5, 6 => 7, 10 => 10];

HTML::pre(array_diff_assoc($array1, $array2)); // all first array , all key => value pairs differ
HTML::pre(array_diff_assoc($array1, $array1)); // empty array
HTML::pre(array_diff_assoc($array1, $array3)); // 2, 4, 6


$stringDiff1 = [0, 1, 2];
$stringDiff2 = ['0', '01', '02'];

HTML::pre(array_diff_assoc($stringDiff1, $stringDiff2)); // (string) $elem1 === (string) $elem2
array_diff_assoc([], ''); // warning
array_diff_assoc('', []); // warning

HTML::pre(array_diff_assoc([0, 1, 2, 3, 4], [0], [1 => 1], [3 => 3], [4 => 4])); // 2
