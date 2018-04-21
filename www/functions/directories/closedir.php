<?php use \Doc\helpers\HTML;

HTML::h1('closedir()');


$dir = dir(__DIR__);
HTML::dump($dir->read());
HTML::dump($dir->read());
closedir($dir->handle);
HTML::dump($dir->read());