<?php use \Doc\helpers\HTML;
HTML::h1('readdir()');

$handler = opendir(__DIR__);
HTML::dump($handler);
HTML::br();


while (($dir = readdir($handler)) !== false) {
    if(!in_array($dir, ['.', '..'])) {
        HTML::p($dir);
    }
}