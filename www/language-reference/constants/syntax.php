<?php

namespace Foo;

define('FIRST', 1+1);
const SECOND = 2+2;
const THIRD = SECOND . ' == 4';
const FORTH = [1, 2, 3];
define('FIFTH', [
    1,
    2,
    3,
]);


var_dump(\Foo\SECOND);
var_dump(\Foo\THIRD);
var_dump(\Foo\FORTH[0]);
var_dump(FIRST);
var_dump(FIFTH);