<?php use \Doc\helpers\HTML;

HTML::h1('unset');


function unsetGlobalNonWorkingAsExpected()
{
    global $a;
    unset($a);
    HTML::dump($a);
}

function removeLink(&$a)
{
    unset($a);
    HTML::dump($a);
}

function unsetStatic()
{
    static $a;
    $a++;
    HTML::p('Before unset a was ' . $a);
    unset($a);
    HTML::p('After unset a is ' . gettype($a));
}

$a = 10;
unsetGlobalNonWorkingAsExpected(); // doesn't unset $a
HTML::dump($a);
HTML::br();

$a = 100;
removeLink($a);
HTML::dump($a);

HTML::br();
HTML::br();

unsetStatic();
unsetStatic();
unsetStatic();

HTML::dump((unset)$a);
HTML::dump($a);
