<?php use \Doc\helpers\HTML;

HTML::h1('array_filter()');


class Foo
{
}
class Bar
{
}

$arrayFoo = array_fill(0, 5, new Foo);
$arrayBar = array_fill(0, 5, new Bar);

$result = array_merge($arrayFoo, $arrayBar);

HTML::pre(array_filter($result, function ($value, $key) {
    return $value instanceof Bar && ($key & 1);
}, ARRAY_FILTER_USE_BOTH));


HTML::pre(array_filter($result, function ($key) {
    return ($key & 1);
}, ARRAY_FILTER_USE_KEY));


HTML::pre(array_filter($result, function ($value) { // by default value
    return $value instanceof Foo;
}));


$removeFalse = [1, 0, 2, null, 3, '', 7, false];
HTML::pre(array_filter($removeFalse));
