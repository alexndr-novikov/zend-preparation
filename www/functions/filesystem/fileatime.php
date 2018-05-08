<?php use \Doc\helpers\HTML;
HTML::h1('fileatime()');

$iter = new \DirectoryIterator(__DIR__);
foreach ($iter as $file) {
    if($file->isFile()) {
        HTML::p($file->getBasename() . ': ' . fileatime($file->getPath()));
    }
}