<?php use \Doc\helpers\HTML;
HTML::h1('__autoload');

function __autoload(string $class)
{
    echo 'Deprecated autoloader triggered for ' . $class;
}

new A();