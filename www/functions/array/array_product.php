<?php use \Doc\helpers\HTML;
HTML::h1('array_product()');
class Foo {}
$array1 = [1, 2, 3, 4, 5];
$array2 = [];
$array3 = [new Foo, '', [], true];
$array4 = [new Foo, [], true];


HTML::p(array_product($array1));
HTML::p(array_product($array2));
HTML::p(array_product($array3));
HTML::p(array_product($array4)); // uses type conv to int


HTML::p('Factorial of 5:');
HTML::p(array_product(range(1, 5)));