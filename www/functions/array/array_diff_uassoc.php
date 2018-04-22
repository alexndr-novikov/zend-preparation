<?php use \Doc\helpers\HTML;

HTML::h1('array_​diff_​uassoc()');

HTML::p('Filters same values: search for the same val, then check key in callback - if return is 0 - remove');

$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$array2 = ["a" => "green", "yellow", "red"];

HTML::pre(array_diff_uassoc($array1, $array2, function ($key1, $key2) {
    HTML::p("Compare pair {$key1}-{$key2}");
    if ($key1 === $key2) {
        return 0;
    }
    return ($key1 > $key2) ? 1 : -1;
}));
