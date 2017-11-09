<?php use \Doc\helpers\HTML;

HTML::h1('array()');

$array = array(
    1,
    2,
    3,
);

HTML::pre($array);
$array = array(
    1 => 1,
    2,
    2 => 2,
    3
);
HTML::pre($array);
$array = array(
    'string key' => array(),
);
HTML::pre($array);

$array = array('key' => 'value');

HTML::p("{$array['key']}");
