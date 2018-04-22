<?php use \Doc\helpers\HTML;

HTML::h1('addslashes');

$strings = [
    'This " ',
    "That '' ",
    'And \ ',
];

foreach ($strings as $string) {
    HTML::dump(addslashes($string));
}
