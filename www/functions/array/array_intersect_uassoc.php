<?php use \Doc\helpers\HTML;
HTML::h1('array_intersect_uassoc()');

$arr1 = ['green', 'yellow', 'blue'];
$arr2 = [100 => 'green', 'blue'];
$arr3 = [200 => 'green', 'yellow',];


HTML::pre(array_intersect_uassoc($arr1, $arr2, $arr3, function($key1, $key2){
    if(is_int($key1) && is_int($key2)) return 0;
    return -1;
}));
