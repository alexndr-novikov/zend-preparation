<h1>Constructors and Destructors</h1><?php


class ParentClass
{
    public function __construct()
    {
        echo 'Class ' . self::class . ' constructor triggered <br>';
    }

    public function __destruct()
    {
        // throw new Exception(''); // causes fatal error
        echo 'Class ' . static::class . ' object destroyed <br>';
    }
}

class DelayedDestroy
{
    public function __destruct()
    {
        echo 'Class ' . static::class . ' object destroyed on script end 
            before output HTML formed and sent to browser after HTTP headers sent<br>';
    }
}

class Child extends ParentClass
{
    public function __construct()
    {
        echo 'Class ' . self::class . ' constructor triggered  and calls parent one<br>';
        parent::__construct();
    }

    public function __destruct()
    {
        echo 'Class ' . static::class . ' object destroyed and calls parent one<br>';
        parent::__destruct();
    }
}

class ChildNoParentEcho extends ParentClass
{
}

new ParentClass;
\Doc\helpers\HTML::br();
new Child;
\Doc\helpers\HTML::br();
new ChildNoParentEcho;

if ((float)substr(PHP_VERSION, 0, 3) < 7.2) {
    \Doc\helpers\HTML::br();
    \Doc\helpers\HTML::br();
    class DeprecatedConstructor
    {
        public function DeprecatedConstructor()
        {
            echo "This is deprecated and will be deleted in further versions";
        }
    }

    new DeprecatedConstructor();
}

$a = new DelayedDestroy;
$b = new DelayedDestroy;
$c = new DelayedDestroy;
