<?php use \Doc\helpers\HTML;

HTML::h1('touch()');

function formatDate($unix)
{
    return date('d/m/Y H:i:s', $unix);
}

$inspectedFile = __DIR__ . DIRECTORY_SEPARATOR . 'touch.test';
file_put_contents($inspectedFile, '');

HTML::p(HTML::strong('Access time', false));
HTML::dump(formatDate(fileatime($inspectedFile)));
HTML::p(HTML::strong('Modify time', false));
HTML::dump(formatDate(filemtime($inspectedFile)));
HTML::br();

$ago = strtotime("-1 week");
HTML::dump(touch($inspectedFile, $ago, $ago + 10));
HTML::p(HTML::strong('Access time', false));
HTML::dump(formatDate(fileatime($inspectedFile)));
HTML::p(HTML::strong('Modify time', false));
HTML::dump(formatDate(filemtime($inspectedFile)));

HTML::br();

// update atime without mod utime
touch($inspectedFile, date('U', filemtime($inspectedFile)), time());
HTML::p(HTML::strong('Access time', false));
HTML::dump(formatDate(fileatime($inspectedFile)));
HTML::p(HTML::strong('Modify time', false));
HTML::dump(formatDate(filemtime($inspectedFile)));
HTML::br();

unlink($inspectedFile);