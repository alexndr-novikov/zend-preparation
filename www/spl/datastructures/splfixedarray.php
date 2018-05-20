<?php use \Doc\helpers\HTML;
ini_set('memory_limit', '-1');
HTML::h1('SplFixedArray');

$fixedArray = new \SplFixedArray(10);
HTML::dump($fixedArray);
HTML::dump(count($fixedArray));
HTML::dump($fixedArray->count());
$fixedArray[ 4 ] = 4;
HTML::dump($fixedArray);
$fixedArray->setSize(1);
HTML::dump($fixedArray);
HTML::dump((array)$fixedArray);

try {
    new \SplFixedArray(-1);
} catch (\InvalidArgumentException $e) {
    HTML::h5($e->getMessage());
}
HTML::dump($fixedArray->count() === $fixedArray->getSize()); // equivalent

$initialMemory = memory_get_usage();
$fixedArray = new \SplFixedArray(1000000);
HTML::p((memory_get_usage() - $initialMemory) . ' bytes for 10 000 elements of SplFixedArray');

unset($fixedArray);
unset($initialMemory);
HTML::dump(memory_get_usage());

$initialMemory = memory_get_usage();
$array = array_fill(0, 1000000, null);
HTML::p( (memory_get_usage() - $initialMemory) . " bytes for 10 000 elements of array");

$fixedArray = \SplFixedArray::fromArray($array);
$initialTime = microtime(true);
foreach ($array as $key => $item) {
    $array[$key] = 2;
}
HTML::p( (microtime(true) - $initialTime) . " for simple array");

$initialTime = microtime(true);
foreach ($fixedArray as $key => $item) {
    $fixedArray[$key] = 2;
}
HTML::p( (microtime(true) - $initialTime) . " for fixed array");

for($size = 1000; $size < 50000000; $size *= 2) {
    HTML::h4("Testing size: $size");
    for($s = microtime(true), $container = [], $i = 0; $i < $size; $i++) $container[$i] = NULL;
    HTML::p("Array(): " . (microtime(true) - $s));

    for($s = microtime(true), $container = new SplFixedArray($size), $i = 0; $i < $size; $i++) $container[$i] = NULL;
    HTML::p("SplArray(): " . (microtime(true) - $s));
}