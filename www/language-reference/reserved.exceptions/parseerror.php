<?php use \Doc\helpers\HTML;
HTML::h1('ParseError');


try {
    eval('if(true){');
} catch (\ParseError $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
}