<?php use \Doc\helpers\HTML;
HTML::h1('ArgumentCountError');


function sum($a, $b) {

}

try {
    sum(1);
} catch (\ArgumentCountError $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
}