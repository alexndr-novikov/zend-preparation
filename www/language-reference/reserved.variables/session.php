<?php use \Doc\helpers\HTML;
HTML::h1('$_​SESSION');

session_start(['name' => 'zend-preparation']);

$randomValue = rand(1, 100);

HTML::p('Set in session by key stored_value value : ' . $randomValue);

$_SESSION['stored_value'] = $randomValue;

HTML::tag('pre', print_r($_SESSION, true));

session_destroy();