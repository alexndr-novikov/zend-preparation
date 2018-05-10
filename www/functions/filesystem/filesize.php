<?php use \Doc\helpers\HTML;
HTML::h1('filesize()');

$iter = new \DirectoryIterator(__DIR__);
foreach ($iter as $file) {
    if($file->isFile()) {
        HTML::p($file->getBasename());
        HTML::p('Size: ' . filesize($file->getRealPath()));
    }
}
?>