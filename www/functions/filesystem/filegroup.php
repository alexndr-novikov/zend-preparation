<?php use \Doc\helpers\HTML;
HTML::h1('filegroup()');

foreach (new \DirectoryIterator(__DIR__) as $file) {
    if($file->isFile()) {
        HTML::p($file->getBasename());
        HTML::p('Group id: ' . filegroup($file->getRealPath()));
        HTML::pre(posix_getgrgid(filegroup($file->getRealPath())));
    }
}