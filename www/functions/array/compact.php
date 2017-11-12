<?php use \Doc\helpers\HTML;
HTML::h1('compact()');


$one = 1;
$two = 2;
$three = 3;
$six = 6;

$arrayForRecursiveHandle = [
    'non existant key',
    'and this too',
    [[[[[['three']]]]]]
];

HTML::pre(compact($arrayForRecursiveHandle)); // 'three' => 3

HTML::pre(compact('one', 'two', ['three'], 'four', ['five'], [[[[[[[[[[[[['six']]]]]]]]]]]]], '_SESSION'));