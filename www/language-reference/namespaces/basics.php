<?php

namespace basic;

use \Doc\helpers\HTML;

require_once 'basic.inc';
require_once 'basic2.inc';

HTML::h1('Using namespaces: Basics');

function info()
{
    echo 'basics.php info() function';
    \Doc\helpers\HTML::br();
}


info();
\info();
Foo\info();
\Foo\info();
\in_array('a', []); // <= core function usage
