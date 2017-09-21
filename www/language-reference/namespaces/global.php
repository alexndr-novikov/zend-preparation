<?php

namespace notGlobal;

use \Doc\helpers\HTML;
HTML::h1('Global space');
function is_null($value)
{
    return "I'm a function from namespace, I do nothing";
}

$null = null;

var_dump(is_null($null)); // custom function
HTML::br();
\var_dump(\is_null($null)); // core function
