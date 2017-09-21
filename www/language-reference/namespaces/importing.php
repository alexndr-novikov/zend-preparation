<?php

namespace Importing;


require_once 'basic2.inc';
require_once 'basic.inc';

use XMLWriter, /* from global namespace */ \Doc\helpers\HTML as H; // using autoloader + aliasing
use function \Foo\info; // import function from another namespace
use function \basic\Foo\info as basicFooInfo; // inport function from another namespace using aliasing
use const \basic\Foo\{
    BASIC_FOO, // import constant
    NOT_BASIC_FOO // import constant
};

H::h1('Using namespaces: Aliasing/Importing');


info();
basicFooInfo();
var_dump(BASIC_FOO);
H::br();
var_dump(NOT_BASIC_FOO);