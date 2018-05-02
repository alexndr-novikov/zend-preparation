<?php use \Doc\helpers\HTML;
HTML::h1('basename()');

$path = __DIR__;
foreach (scandir($path) as $file) {
    HTML::p(basename($path . DIRECTORY_SEPARATOR . $file));
    HTML::p(basename($path . DIRECTORY_SEPARATOR . $file, '.php'));
    HTML::br();
}