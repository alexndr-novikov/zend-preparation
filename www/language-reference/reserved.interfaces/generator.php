<?php use \Doc\helpers\HTML;

HTML::h1('Generator');


try {
    new Generator;
} catch (\Throwable $e) {
    echo $e->getMessage();
}


function generator()
{
    yield 1;
    yield 2;
    yield from range(3, 9);
    yield 10;
    return 11;
}
HTML::br();
$generator = generator();

echo 'Object class is: ' . get_class($generator);
HTML::br();

HTML::br();

foreach ($generator as $key => $value) {
    echo sprintf('Data from generator directly: Value - %s, key - %s', $generator->current(), $generator->key());
    HTML::br();
}

echo sprintf('And generator return value was %s', $generator->getReturn());
HTML::br();
HTML::br();

function testGenerator($someVal)
{
    echo 'This will be called on rewind()';
    HTML::br();

    yield 1;
    yield 2;
}
$generator = testGenerator(null);
$generator->rewind();
echo $generator->current();
HTML::br();
$generator->next();
echo $generator->current();
HTML::br();

function sendGenerator()
{
    while (true) {
        $string = yield;
        echo $string;
        HTML::br();
    }
}
$generator = sendGenerator();
echo $generator->current();
$generator->send('new string');
echo $generator->current();
$generator->send('new string 2');
echo $generator->current();
HTML::br();

function exceptional()
{
    try {
        yield;
    } catch (\Throwable $e) {
        echo $e->getMessage();
        HTML::br();
    }
    echo 'Caught exception';
}
$generator = exceptional();
$generator->throw(new \Exception('Pushed exception to generator'));

HTML::br();HTML::br();
var_dump($generator->valid());
$generator = exceptional();
HTML::br();
var_dump($generator->valid());


HTML::br();HTML::br();

try {
    serialize($generator); // __wakeup() usage
} catch (\Throwable $e) {
    echo $e->getMessage();
}
