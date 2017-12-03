<?php use \Doc\helpers\HTML;

HTML::h1('array_intersect_ukey()');

$arr1 = ['a' => 1, 'aa' => 2, 'aaa' => 3, 'aaaa' => 4, 'aaaaa' => 5];
$arr2 = ['bbb' => 7, 'bbbbbb' => 6, 'bbbbbbbb' => 8, 'bbbbbbbbb' => 9, 'bb' => 10];

HTML::pre(array_intersect_ukey($arr1, $arr2, function ($key1, $key2) {
    if (is_string($key1) && is_string($key2) && (strlen($key1) == strlen($key2))) {
        return 0;
    }
    var_dump((strlen($key1) == strlen($key2)), $key1, $key2);
    HTML::br();
    return -1;
}));