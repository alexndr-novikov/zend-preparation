<?php use \Doc\helpers\HTML;
HTML::h1('Error');

const SAMPLE_ERROR_CODE = 10;
try {
    throw new Error('Sample \Error exception', SAMPLE_ERROR_CODE, new Error());
} catch (\Error $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
    HTML::br();
    var_dump($e->getPrevious());
    HTML::tag('pre', print_r($e->getTrace(), true));
    HTML::br();
    var_dump($e->getTraceAsString());

}
