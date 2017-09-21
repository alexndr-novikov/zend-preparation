<?php
use \Doc\helpers\HTML;

HTML::h1('Namespaces and dynamic language features');

require_once 'dynamic.inc';
require_once 'dynamic2.inc';

HTML::h3('Global namespace');

$className = 'Core';

new $className;

$functionName = 'core';

$functionName();

HTML::h3('\'inner\' namespace - single quotes, no trailing \\');

$className = 'inner\Core';
$functionName = 'inner\core';

new $className;
$functionName();

HTML::h3('\'inner\' namespace - single quotes with trailing \\');

$className = '\inner\Core';
$functionName = '\inner\core';

new $className;
$functionName();



HTML::h3('\'inner\' namespace - double quotes');

$className = "\\inner\\Core";
$functionName = "\\inner\\core";

new $className;
$functionName();