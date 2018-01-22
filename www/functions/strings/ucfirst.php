<?php use \Doc\helpers\HTML;
HTML::h1('ucfirst');


$string = 'Lorem ipsum dolor sit ämet'; // ä is not capitalised for default locale

function capitaliseString(string $string)
{
    $string = explode(' ', $string);
    foreach ($string as &$value) {
        $value = ucfirst($value);
    }
    return implode(' ', $string);
}

HTML::dump(capitaliseString($string));