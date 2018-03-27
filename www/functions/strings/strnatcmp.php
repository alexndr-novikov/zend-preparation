<?php use \Doc\helpers\HTML;
HTML::h1('strnatcmp');


HTML::dump(strnatcmp('abc', 'Abc'));
HTML::dump(strnatcmp('abc', 'bbc'));
HTML::dump(strnatcmp('bbc', 'abc'));
HTML::dump(strnatcmp('bbc', 'bbc'));
HTML::dump(strnatcmp('0bbc', 'bbc'));
HTML::dump(strnatcmp('0bbc', '1bbc'));
HTML::dump(strnatcmp('1bbc', '0bbc'));

$strings = [
    'abc','1bbc', 'bbc10', 'Abc', 'bbc', '0bbc', 'bbc1',
];
usort($strings, 'strnatcmp');
HTML::pre($strings);