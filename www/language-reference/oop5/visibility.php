<h1>Visibility</h1><?php

class ParentOne
{
    private $a = 'a'; // only inside ParentOne
    protected $b = 'b'; // inside ParentOne and it's children, e.g ChildOne
    public $c = 'c'; // everywhere
    var $d = 'd'; // everywhere

    const ONE = 1; // everywhere
    protected const TWO = 2; // inside ParentOne and it's children, e.g ChildOne
    private const THREE = 3; // only inside ParentOne

    public function a() // everywhere
    {

    }

    protected function b() // inside ParentOne and it's children, e.g ChildOne
    {

    }

    private function c() // only inside ParentOne
    {
        return 'c()';
    }

    public function echoPrivate()
    {
        echo $this->c() . $this->a . self::THREE;
    }


}

class ChildOne extends ParentOne
{
//    public function echoPrivate()
//    {
//        echo $this->c() . $this->a . self::THREE;
//    }
// this will trigger fatal error cause private fields exist only in parent

    public function echoPrivate()
    {
        parent::echoPrivate();
    }

    public function echoParentAndOwnProtected()
    {
        echo $this->b() . $this->b . parent::TWO;
    }
}

$parent = new ParentOne();
$parent->echoPrivate();

\Doc\helpers\HTML::br();
$child = new ChildOne();
$child->echoPrivate(); // this triggers parent's function and it's ok
\Doc\helpers\HTML::br();
$child->echoParentAndOwnProtected();

\Doc\helpers\HTML::br();\Doc\helpers\HTML::br();

class ClosedButNotEnough
{
    private $contextName;

    public function __construct($context)
    {
        $this->contextName = $context;
        return $this;
    }


    public function findOutSecret(self $traitor)
    {
        echo $traitor->secret();
        \Doc\helpers\HTML::br();
    }

    private function secret()
    {
        return 'private, but accessed as public from ' . $this->contextName;
    }
}


$spy = new ClosedButNotEnough('spy');
$traitor = new ClosedButNotEnough('traitor');

$spy->findOutSecret($traitor);