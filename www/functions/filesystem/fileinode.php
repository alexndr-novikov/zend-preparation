<?php use \Doc\helpers\HTML;
HTML::h1('fileinode()');

foreach (new \DirectoryIterator(__DIR__) as $file) {
    if($file->isFile()) {
        HTML::p($file->getBasename());
        HTML::p('File inode: ' . fileinode($file->getRealPath()));
    }
}