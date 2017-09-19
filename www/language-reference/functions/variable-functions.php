<h1>Variable functions</h1><?php


function callFunction(string $functionName, ...$args)
{
    if(!function_exists($functionName)) {
        throw new Exception('Function doesn\'t exist');
    }
    return $functionName(...$args); // <==
}

function sum(int $a, int $b) : int
{
    return $a + $b;
}

echo callFunction('sum', 1, 3); // 4

class MethodCaller
{
    private $methodName;

    public function __construct($methodName)
    {
        $this->methodName = $methodName;
        return $this;
    }

    public function setMethod(string $method)
    {
        if(!method_exists($this, $method)) throw new Exception('Method doesn\'t exist');
        $this->methodName = $method;
    }

    public static function callStatic()
    {
        echo 'static';
    }

    public function call()
    {
        return $this->{$this->methodName}();
    }

    private function test()
    {
        echo 'Reached it';
    }

    private function test2()
    {
        echo 'Reached it 2';
    }

}

$obj = new MethodCaller('test');
\Doc\helpers\HTML::br();
$obj->call();
$obj->setMethod('test2');
\Doc\helpers\HTML::br();
$obj->call();
\Doc\helpers\HTML::br();
$methodName = 'callStatic';
$obj::$methodName();\Doc\helpers\HTML::br();
$methodName = 'MethodCaller::callStatic'; // From php 7.0 and better
$methodName();