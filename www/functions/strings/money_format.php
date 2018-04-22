<?php use \Doc\helpers\HTML;

HTML::h1('money_format');


$numbers = [
    1.12,
    10,
    -100,
    -2.81,
];

$formats = [
    '%=~i',
    '%(i',
    '%!i',
    '%-i',
    '%w10i',
    '%-w10i',
    '%.1i',
    '%.0i',
    '%i',
    '%n',
    '%%',
];

setlocale(LC_MONETARY, 'en_GB');

foreach ($numbers as $number) {
    foreach ($formats as $format) {
        HTML::dump(money_format($format, $number));
    }
    HTML::p('');
}
