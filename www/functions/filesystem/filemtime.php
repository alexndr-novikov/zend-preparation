<?php use \Doc\helpers\HTML;
HTML::h1('filemtime()');


$iter = new \DirectoryIterator(__DIR__);
foreach ($iter as $file) {
    if($file->isFile()) {
        HTML::p($file->getBasename());
        HTML::p('Access time: ' . fileatime($file->getPath()));
        HTML::p('Modify time: ' . filemtime($file->getPath()));
    }
}
