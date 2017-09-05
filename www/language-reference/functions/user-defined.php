<?php declare(strict_types=1); ?>
<h1>User-defined functions</h1><?php


function classFunction($arg)
{

    class NewClass
    {
        private $innerValue;

        public function __construct(string $innerValue)
        {
            $this->innerValue = $innerValue;
            return $this;
        }

        public function __toString() : string
        {
            return $this->innerValue;
        }
    }

    return (string)(new NewClass($arg));
}

echo classFunction('Hello');
br();
a();
br();
// b(); - Fatal error
function a() {echo __FUNCTION__ , __LINE__;}

if(true) {
    function b() {echo __FUNCTION__ , __LINE__;}
}

a();
br();
b();
br();
function c()
{
    echo __FUNCTION__ , __LINE__;
//    return; if return is here - d() is never declared even if c() is called
    function d()
    {
        echo __FUNCTION__ , __LINE__;
    }
}

// d(); - Fatal error here
c();
br();
d();
br();

var_dump(new NewClass(''));
br();
function recursive($a) {
    if($a < 400) {
        echo "$a ";
        recursive($a+1);
    }
}

recursive(1);