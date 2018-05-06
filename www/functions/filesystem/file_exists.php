<?php use \Doc\helpers\HTML;
HTML::h1('file_exists()');

$fileThatExists = __DIR__ . DIRECTORY_SEPARATOR . 'basename.php';
$fileThatDoesNotExists = __DIR__ . DIRECTORY_SEPARATOR . 'fake.php';

HTML::dump(file_exists($fileThatExists));
HTML::dump(file_exists('https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'));
HTML::dump(file_exists($fileThatDoesNotExists));