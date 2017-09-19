<?php
declare(strict_types=1); // the only one code that can be earlier than namespace if it's used
namespace namespaceDoc;

use \Doc\helpers\HTML;



class A {}

interface namespaceDocInterface
{

}

function foo() {
    echo __NAMESPACE__ . __FUNCTION__;
}

const FOO = 1;

namespace additionalNamespace;

use Doc\helpers\HTML;

function foo() {
    echo __NAMESPACE__ . __FUNCTION__ . ' second one';
}

HTML::h1('Defining namespaces');

\namespaceDoc\foo();
HTML::br();
var_dump(\namespaceDoc\FOO);
HTML::br();
\additionalNamespace\foo();