<?php
namespace core\Bar;

use Doc\helpers\HTML;

function whatNamespace()
{
    echo __NAMESPACE__;
    HTML::br();
}