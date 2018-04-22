<?php use \Doc\helpers\HTML;

HTML::h1('join');


$arrays = [
    [],
    ['a'],
    ['one cat', 'two cat'],
    range(1, 10),
    1,
    new stdClass(),
];

foreach ($arrays as $array) {
    HTML::dump(join(' meow ', $array));
    HTML::dump(join($array, ' meow ')); // also works but not recommended
    HTML::br();
}
