<?php

$flag = true || true || true; //equal

// Operators return boolean
$checkValue = true;
if ($flag == $checkValue) {
    // yep, it's true
}

if ($flag == true) {
}
//is equal to
if ($flag) {
    // and this is preferred
}

// convert to boolean
var_dump((bool)'' === false); // empty string
var_dump((bool)'0' === false); //string with zero inside
var_dump((bool)0 === false); // int 0
var_dump((bool)0.0 === false); // float 0
var_dump((bool)[] === false); // empty array
var_dump((bool)null === false); // null

$string = <<<XML
<?xml version='1.0'?>
<document></document>
XML;
$simpleXmlObject = simplexml_load_string($string);
var_dump((bool)$simpleXmlObject === false); // simple xml consists of empty tags
// everything else is true
