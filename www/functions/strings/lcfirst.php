<?php use \Doc\helpers\HTML;
HTML::h1('lcfirst');


$string = 'Lorem Ipsum Dolor Sit Āmet'; // ä is not lowercased for default locale

function lowercaseStringFirst(string $string)
{
    $string = explode(' ', $string);
    foreach ($string as &$value) {
        $value = lcfirst($value);
    }
    return implode(' ', $string);
}

HTML::dump(lowercaseStringFirst($string));