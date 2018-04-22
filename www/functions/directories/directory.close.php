<?php use \Doc\helpers\HTML;

HTML::h1('Directory::close');


$dir = dir(__DIR__);
HTML::dump($dir);

HTML::p($dir->read());
HTML::p($dir->read());
HTML::p($dir->read());
$dir->close();

$dir->read(); // warning
