<?php use \Doc\helpers\HTML;
HTML::h1('Exception');


 var_dump(new \Exception instanceof Throwable);

$exceptionFirst = new \Exception('Parent exception');
$exceptionSecond = new \Exception('Child exception', $code = 500, $exceptionFirst);

HTML::br();
var_dump($exceptionSecond->getMessage());
HTML::br();
var_dump($exceptionSecond->getCode());
HTML::br();
var_dump($exceptionSecond->getFile() . ', line ' . $exceptionSecond->getLine());
HTML::br();
var_dump($exceptionSecond->getPrevious()->getMessage());
HTML::br();

var_dump($exceptionSecond->getPrevious()->getPrevious()); // NULL

HTML::br();
HTML::br();
HTML::tag('pre', print_r($exceptionSecond->getTrace(), true));
HTML::br();
echo $exceptionSecond; // __toString() triggered
HTML::br();
echo $exceptionSecond->getTraceAsString();

HTML::br();
HTML::br();
HTML::br();
try {
    $fatalError = clone $exceptionSecond;
} catch (Throwable $e) {
    echo $e->getMessage();
}
