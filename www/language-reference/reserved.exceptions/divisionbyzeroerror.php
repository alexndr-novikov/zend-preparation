<?php
error_reporting(-1); // warning is called first

use \Doc\helpers\HTML;

HTML::h1('DivisionByZeroError');

try {
    1/0;
} catch (\DivisionByZeroError $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
}
