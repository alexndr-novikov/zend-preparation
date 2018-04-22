<?php use \Doc\helpers\HTML;

HTML::h1('array_map()');


HTML::pre(array_map(function ($item) {
    return $item ** 3;
}, [1, 2, 3, 4]));

HTML::pre(array_map(function ($arr1Item, $arr2Item) {
    return ($arr1Item ** 2) . ', ' . ($arr2Item ** 3);
}, [1, 2, 3, 4], [1, 2, 3, 4]));

HTML::pre(array_map(function ($arr1Item, $arr2Item) {
    return ($arr1Item ** 2) . ', ' . ($arr2Item ** 3);
}, [1, 2, 3, 4], [])); // nulls in second array as paired values

HTML::pre(array_map(null, [1, 2, 3, 4], [1, 2, 3, 4])); // get an array of arrays

HTML::pre(array_map(function ($value) {
    return $value;
}, ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4])); // keep string keys
HTML::pre(array_map(function ($value) {
    return $value;
}, ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4], [1, 2, 3, 4])); // reset string keys

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
HTML::pre(array_map(function ($key, $value) {
    return "Key $key, value $value";
}, array_keys($array), $array));
