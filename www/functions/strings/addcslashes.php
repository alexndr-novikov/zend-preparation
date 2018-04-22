<?php use \Doc\helpers\HTML;

HTML::h1('addcslashes');

$strings = [
    "Contains\r\n",
    'afnrt',
    'hello world',
    'add[]',

];

foreach ($strings as $string) {
    HTML::dump(addcslashes($string, 'A..z0'));
}

foreach ($strings as $string) {
    HTML::dump(addcslashes($string, '\0..\255'));
}
