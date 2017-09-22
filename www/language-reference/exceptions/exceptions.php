<?php use \Doc\helpers\HTML;

HTML::h1('Basics');


class CustomException extends \Exception
{

}

const BAD_FUNCTION_CALL_EXCEPTION = 0;
const RUNTIME_EXCEPTION = 1;
const CUSTOM_EXCEPTION = 2;
const UNDERFLOW_EXCEPTION = 3;
const REFLECTION_EXCEPTION = 4;
const RANGE_EXCEPTION = 5;
const OVERFLOW_EXCEPTION = 6;
const OUT_OF_RANGE_EXCEPTION = 7;

$mapExceptions = [
    BAD_FUNCTION_CALL_EXCEPTION => \BadFunctionCallException::class,
    RUNTIME_EXCEPTION => \RuntimeException::class,
    CUSTOM_EXCEPTION => \CustomException::class,
    UNDERFLOW_EXCEPTION => \UnderflowException::class,
    REFLECTION_EXCEPTION => \ReflectionException::class,
    RANGE_EXCEPTION => \RangeException::class,
    OVERFLOW_EXCEPTION => \OverflowException::class,
    OUT_OF_RANGE_EXCEPTION => \OutOfRangeException::class,
];
try {
    try {
        throw new $mapExceptions[rand(0, 7)];
    } catch (CustomException $e) {
        HTML::tag('p', 'Was waiting for custom exception and got it');
    } catch (\UnderflowException | \RangeException $e) {
        HTML::tag('p', 'Was waiting for UnderflowException or RangeException and got it');
        HTML::tag('p', $e->getMessage());
    } catch (\BadFunctionCallException | \RuntimeException | \OverflowException | \OutOfRangeException $e) {
        HTML::tag('p', 'Was waiting for any other Exception and got it');
        $reflection = new \ReflectionClass($e);
        HTML::tag('p', $reflection->getName());
    } finally {
        HTML::tag('p', 'Successfully caught an exception');
    }
} catch (\ReflectionException $e) {
    HTML::tag('p', 'Was waiting for ReflectionException and got it');
}


HTML::tag('p', 'Continue normal flow');

