<?php

namespace namespaceDoc\Sub\Nested\Level;

use \Doc\helpers\HTML;

HTML::h1('Declaring sub-namespaces');


class Foo
{
    public function __construct()
    {
        echo __CLASS__;
        HTML::br();
    }
}

new Foo;
