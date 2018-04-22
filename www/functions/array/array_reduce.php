<?php use \Doc\helpers\HTML;

HTML::h1('array_reduce()');


$array = [1, 2, 3, 4, 5,];

HTML::p(array_reduce($array, function ($carry, $item) {
    HTML::p($carry);
    $carry += $item;
    return $carry;
}, 1));

HTML::p('Total count is :' . array_reduce([[1, 1, 1, 1], [1, 1], [1, 1, 1]], function ($carry, $item) {
    $carry += count($item);
    return $carry;
}, 0));

var_dump(array_reduce([], function () {
}));
