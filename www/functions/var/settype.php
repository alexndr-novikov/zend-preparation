<?php use \Doc\helpers\HTML;

HTML::h1('settype');

$possibleTypes = [
    "boolean",
    "bool",
    "integer",
    "int",
    "float",
    "double",
    "string",
    "array",
    "object",
    "null",
];

foreach ($possibleTypes as $type) {
    $variable = ['12' , 'qwerty'];
    HTML::p(HTML::strong($type, false));
    echo 'Set type result: ';
    HTML::dump(settype($variable, $type));
    HTML::dump($variable);
    HTML::br();
}
