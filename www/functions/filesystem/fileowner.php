<?php use \Doc\helpers\HTML;
HTML::h1('fileowner()');

$iter = new \DirectoryIterator(__DIR__);
foreach ($iter as $file) {
    if($file->isFile()) {
        HTML::p($file->getBasename());
        HTML::p('File owner id: ' . fileowner($file->getRealPath()));
    }
}