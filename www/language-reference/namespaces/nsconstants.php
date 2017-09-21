<?php

namespace core {
    use \Doc\helpers\HTML;
    HTML::h1('namespace keyword and __NAMESPACE__ constant');
}

namespace {

    use Doc\helpers\HTML;

    require_once 'nsconstants.inc';
    require_once 'nsconstants2.inc';


    function foo()
    {
        return 'Foo';
    }

    namespace\foo();
    namespace\core\Bar\whatNamespace();
    namespace\core\Foo\whatNamespace();


    var_dump(__NAMESPACE__);
    HTML::br();

}