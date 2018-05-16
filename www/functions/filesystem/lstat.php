<?php use \Doc\helpers\HTML;

HTML::h1('lstat()');

$basePath = __DIR__ . DIRECTORY_SEPARATOR;
$filePath = $basePath . 'tmp';
$linkPath = $basePath . 'tmpLink';
file_put_contents($filePath, '');
symlink($filePath, $linkPath);
HTML::pre(lstat($filePath));
HTML::pre(lstat($linkPath));
HTML::pre(array_diff(lstat($filePath), lstat($linkPath)));
unlink($filePath);
unlink($linkPath);