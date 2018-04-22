<?php use \Doc\helpers\HTML;

HTML::h1('AssertionError');


try {
    assert('false === true');
} catch (\AssertionError $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
}
