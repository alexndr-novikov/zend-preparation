<?php

/**
 * @return mixed
 * @return array|object|int|string
 */
function mixed()
{
    $data = [
        1,
        'a',
        [1],
        (object)[1],
    ];
    return $data[rand(0, count($data) - 1)];
}
var_dump(mixed());
var_dump(mixed());
var_dump(mixed());
echo "<br><br>";
/**
 * @return number
 */
function number()
{
    $data = [
        1,
        1.1,
    ];
    return $data[rand(0, count($data) - 1)];
}
var_dump(number());
var_dump(number());
var_dump(number());

/**
 * @param callback $a
 */
function getCallback(callable $a) : void
{

}