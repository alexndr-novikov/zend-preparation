<?php use \Doc\helpers\HTML;

HTML::h1('array_splice()');

function testSplice($array, $offset, $length = null, $replacement = [])
{
    if(is_null($length)) $length = count($array);
    array_splice($array, $offset, $length, $replacement);
    HTML::pre($array);
}

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

testSplice($array, 0, 9);
testSplice($array, 0, 9, ['new', 'values']);
testSplice($array, -2, 2, ['new', 'values']);
testSplice($array, -2);
testSplice($array, 1, -1);
testSplice($array, 1, -1, ['1']);
testSplice($array, 1, 0, ['1']);
testSplice($array, 1, 0, '1');

