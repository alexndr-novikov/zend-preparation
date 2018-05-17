<?php use \Doc\helpers\HTML;

HTML::h1('stat()');

$basePath = __DIR__ . DIRECTORY_SEPARATOR;
$filePath = $basePath . 'tmp';
$linkPath = $basePath . 'tmpLink';
file_put_contents($filePath, '');
symlink($filePath, $linkPath);
HTML::pre(stat($filePath));
HTML::pre(stat($linkPath));
HTML::h4('File vs link stat:');
HTML::pre(array_diff(stat($filePath), stat($linkPath)));
HTML::h4('Link stat vs lstat:');
HTML::pre(array_diff(lstat($linkPath), stat($linkPath)));
unlink($filePath);
unlink($linkPath);