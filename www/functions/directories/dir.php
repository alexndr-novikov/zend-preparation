<?php use \Doc\helpers\HTML;

HTML::h1('dir()');

$dir = dir(__DIR__);
HTML::dump($dir);

$dir = dir(md5(random_bytes(12)));
HTML::dump($dir);

function readDirectory(Directory $dir)
{
    while (($data = $dir->read()) !== false) {
        yield $data;
        if ($data == 'directory.read.php') {
            $dir->rewind();
            return;
        }
    }
}

foreach (readDirectory(dir(__DIR__)) as $item) {
    HTML::p($item);
}