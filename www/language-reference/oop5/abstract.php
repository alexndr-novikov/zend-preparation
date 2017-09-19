<h1>Class Abstraction</h1><?php

set_error_handler(function (...$args) {
    var_dump($args);
    return true;
});

abstract class AbstractClass
{
    protected abstract function func($a, $b);

    public function echoStr()
    {
        echo 'string';
        \Doc\helpers\HTML::br();
    }
}

class AbstractExtender extends AbstractClass
{
    public function func // can be public or protected
    ($a, $b, $d = 20) // allows not required params over abstract one
    {
        echo 'smth';
    }
}

// var_dump(new AbstractClass);  // will trigger an error

var_dump((new AbstractExtender)->echoStr());