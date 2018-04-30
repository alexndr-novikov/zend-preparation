<?php use \Doc\helpers\HTML;
HTML::h1('rewinddir()');

$dir = dir(__DIR__);

HTML::p($dir->read());
HTML::p($dir->read());
HTML::p($dir->read());
rewinddir($dir->handle);
HTML::p($dir->read());
HTML::p($dir->read());
HTML::p($dir->read());
