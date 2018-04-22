<?php use \Doc\helpers\HTML;

HTML::h1('sprintf');


// 'format' => args
$examples = [
    '%+d' => [100],
    "%+'.9d" => [-100],
    "%+'.-9d" => [-100],// use sign left padding till length 9 using dot use 3 digits after dot as double
    "%+'.-9.3f" => [-100], // use sign left padding till length 9 using dot use 3 digits after dot as float
    "%+'.-9.2s" => [100], // use sign left padding till length 9 using dot limit arg length 2 as string
    "%b" => [13], // binary
    "%c" => [13], // ASII char by code
    "%d" => [-13], // signed decimal
    "%e" => [-13], // -1.300000e+1
    "%.1e" => [-13], // -1.3e+1
    "%E" => [-13], // -1.300000E+1
    "%.1E" => [-13], // -1.3E+1
    "%.2f" => [-13], // locale dependent float
    "%.2F" => [-13], // locale independent float
    "%.2g" => [9999999999999], // shorter version of f and e
    "%.3g" => [10], // shorter version of f and e
    "%.2G" => [9999999999999], // shorter version of F and E
    "%.3G" => [10], // shorter version of F and E
    "%o" => [13], // octal
    "%o - hex" => [-13], // octal
    '%2$s %1$s' => ['one', 'two'],
    '%1$s %2$s' => ['one', 'two'],
    '%1$s %1$s %1$d' => ['one', 'two'],
    "%u" => [-13], // unsigned int
    "%u " => [13], // unsigned int
    "%x" => [13], // hex lowercase
    "%X" => [13], // hex uppercase
];

foreach ($examples as $format => $args) {
    HTML::dump(sprintf($format, ...$args));
}
