<?php

namespace notGlobal {

    use \Doc\helpers\HTML;

    HTML::h1('Using namespaces: fallback to global function/constant');

    class A
    {
    }

    function time()
    {
        return 'mocked time';
    }

    var_dump(new A);
    HTML::br();
    foo(); // function fallbacks to global namespace function
    HTML::br();
    var_dump(GLOBAL_NAMESPACE_CONST); // constant fallbacks to global namespace constant
    HTML::br();
    echo time(); // can be used to mock native functions
}

namespace {

    class A
    {
    }

    function foo()
    {
        echo 'Foo() from global namespace';
    }

    const GLOBAL_NAMESPACE_CONST = 'GLOBAL_NAMESPACE_CONST';
}
