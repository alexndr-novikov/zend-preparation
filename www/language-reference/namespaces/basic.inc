<?php

namespace basic\Foo {

    const BASIC_FOO = __NAMESPACE__;
    const NOT_BASIC_FOO = __NAMESPACE__;

    function info()
    {
        echo 'basic.inc basic\Foo namespace info() function';
        \Doc\helpers\HTML::br();
    }
}

namespace {
    function info()
    {
        echo 'basic.inc global namespace info() function';
        \Doc\helpers\HTML::br();
    }
}