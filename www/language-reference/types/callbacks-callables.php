<h1>Callbacks</h1>
<?php

function process(callable $callback) {
    $callback(1);
}

$callback = function ($arg) {
    echo $arg * 2;
};

process($callback);

function callback_method(...$arguments)
{
    echo "Callback method triggered with params:" . implode(' ,', $arguments) . "<br>";
}

class Callback
{
    private $property;

    public function __construct($property)
    {
        $this->property = $property;
    }


    public function callbackMethod(...$arguments)
    {
        echo "Class callback method triggered with property {$this->property} and params:" . implode(' ,', $arguments) . "<br>";
    }

    public static function staticCallback(...$arguments)
    {
        echo "Class callback static method triggered with params:" . implode(' ,', $arguments) . "<br>";
    }
}
echo "<br>";
call_user_func('callback_method', 1, 'a', 112);
$object = new Callback('cat meow');
call_user_func([$object, 'callbackMethod'], 2, 4, 8);
call_user_func([$object, 'staticCallback'], 2, 4, 8);
call_user_func(['Callback', 'staticCallback'], 2, 4, 8);
call_user_func('Callback::staticCallback', 1, 'a', 112);

class A
{
    public static function hey()
    {
        echo "Hey A";
    }
}

class B extends A
{
    public static function hey()
    {
        echo "Hey B";
    }
}

call_user_func(['B', 'parent::hey']);

class Invokable
{
    function __invoke(...$params)
    {
        echo implode(':', $params);
    }

}

call_user_func(new Invokable(), 1 , 5, 19);
call_user_func_array('callback_method', [1 , 5, 19]);