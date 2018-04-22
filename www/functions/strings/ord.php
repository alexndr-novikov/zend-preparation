<?php use \Doc\helpers\HTML;

HTML::h1('ord');

$chars = range('A', 'z');
foreach ($chars as $char) {
    HTML::p("For '$char' code is " . ord($char));
}
