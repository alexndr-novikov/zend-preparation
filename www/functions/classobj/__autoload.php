<?php use \Doc\helpers\HTML;
HTML::h1('__autoload');
HTML::p(HTML::a('/', 'back', false));

function __autoload(string $class)
{
    echo 'Deprecated autoloader triggered for ' . $class;
    require '../../src/helpers/HTML.php';
}
