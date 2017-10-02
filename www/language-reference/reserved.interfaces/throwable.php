<?php use \Doc\helpers\HTML;
HTML::h1('Throwable');


try {
    eval('.;');
} catch (\Throwable $e) {
    echo sprintf('Got exception %s with code %s in file %s on line %s', $e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());

    echo $e->getTraceAsString();
    HTML::h3('trace');
    HTML::tag('pre', print_r($e->getTrace(), true));
    HTML::h3('previous:');
    var_dump($e->getPrevious());

}