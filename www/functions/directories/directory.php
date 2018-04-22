<?php use \Doc\helpers\HTML;

HTML::h1('The Directory class');

$dir = dir(__DIR__);
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

foreach (readDirectory($dir) as $item) {
    HTML::p($item);
}
//rewinded in function
HTML::p($dir->read());
HTML::p($dir->read());
HTML::p($dir->read());
$dir->close();

$dir->read(); // warning

$dir = new Directory;
HTML::dump($dir);
$dir->path = __DIR__;
HTML::dump($dir);
