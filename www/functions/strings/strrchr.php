<?php use \Doc\helpers\HTML;
HTML::h1('strrchr');


$path = __DIR__;
HTML::dump($path);
HTML::dump(strrchr($path, DIRECTORY_SEPARATOR));

HTML::dump(ord(DIRECTORY_SEPARATOR));

HTML::dump(strrchr($path, 47));
HTML::dump(strrchr($path, 'Sparta'));