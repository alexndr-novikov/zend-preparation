<?php use \Doc\helpers\HTML;

HTML::h1('ArithmeticError');


try {
    2 >> -1;
} catch (\ArithmeticError $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
}
