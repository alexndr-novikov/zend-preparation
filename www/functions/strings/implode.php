<?php use \Doc\helpers\HTML;
HTML::h1('implode');


$arrays = [
    [],
    ['a'],
    ['one cat', 'two cat'],
    range(1, 10),
    1,
    new stdClass(),
];

foreach ($arrays as $array) {
    HTML::dump(implode(' meow ', $array));
    HTML::dump(implode($array , ' meow ')); // also works but not recommended
    HTML::br();
}