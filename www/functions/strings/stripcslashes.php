<?php use \Doc\helpers\HTML;
HTML::h1('stripcslashes');


$strings = [
    "Contains\r\n",
    'afnrt',
    'hello world',
    'add[]',

];

foreach ($strings as $string) {
    HTML::dump($new = addcslashes($string, 'A..z0'));
    HTML::dump(stripslashes($new));
    HTML::br();
}