<?php use \Doc\helpers\HTML;
HTML::h1('doubleval');

$variables = [
    '1',
    '0',
    '123456',
    '0.1273916sdks',
    'prefix1.1239',
    '011',
    'ab',
    'false',
    '',
    [],
    [1, 2],
    new stdClass(),
    0,
    1,
    1.1,
    true,
    false
];

foreach ($variables as $variable) {
    HTML::dump($variable);
    HTML::p('=> ' . doubleval($variable));;
    HTML::br();
}