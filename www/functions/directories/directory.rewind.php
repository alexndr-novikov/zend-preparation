<?php use \Doc\helpers\HTML;

HTML::h1('Directory::rewind');


$dir = dir(__DIR__);
HTML::dump($dir);

HTML::p($dir->read());
HTML::p($dir->read());
HTML::p($dir->read());
$dir->rewind();
HTML::p($dir->read());
HTML::p($dir->read());
HTML::p($dir->read());
