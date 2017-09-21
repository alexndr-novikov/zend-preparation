<?php

namespace inner;

use Doc\helpers\HTML;

class Core
{
    public function __construct()
    {
        echo __CLASS__;
        HTML::br();
        echo __FUNCTION__;
        HTML::br();
    }

}

function core()
{
    echo __FUNCTION__;
    HTML::br();
}