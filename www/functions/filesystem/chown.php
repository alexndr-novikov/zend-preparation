<?php use \Doc\helpers\HTML;

HTML::h1('chown()');

$path = __DIR__ . DIRECTORY_SEPARATOR . 'tmp';
file_put_contents($path, '');
HTML::pre(posix_getpwuid(stat($file)[ 'uid' ]));
HTML::dump(chown($path, 'www-data'));
HTML::pre(posix_getpwuid(stat($file)[ 'uid' ]));
unlink($path);