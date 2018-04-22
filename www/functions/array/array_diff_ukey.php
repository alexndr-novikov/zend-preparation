<?php use \Doc\helpers\HTML;

HTML::h1('array_​diff_​ukey()');

HTML::p('Compares keys only via callback');
$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$array2 = ["a" => "green", "yellow", "red"];

HTML::pre(array_diff_ukey($array1, $array2, function ($key1, $key2) {
    HTML::p("Compare pair {$key1}-{$key2}");
    if ($key1 === $key2) {
        return 0;
    }
    return ($key1 > $key2) ? 1 : -1;
}));
