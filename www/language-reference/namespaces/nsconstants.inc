<?php

namespace core\Foo;

use Doc\helpers\HTML;

function whatNamespace()
{
    echo __NAMESPACE__;
    HTML::br();
}