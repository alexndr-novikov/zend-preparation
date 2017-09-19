<?php use \Doc\helpers\HTML;
HTML::h1('Traits');

HTML::h3('Overriding');
class ParentClass
{
    public function getErrors()
    {
        return 'ParentClass errors method';
    }
}

class ChildClass
{
    use ErrorsTrait;

    public function getErrors()
    {
        return 'ChildClass errors method';
    }
}

class SecondChildClass
{
    use ErrorsTrait;
}


trait ErrorsTrait
{
    protected $errors = [];

    public function getErrors() : array
    {
        return $this->errors;
    }

    protected function addError(string $error) : void
    {
        $this->errors[] = $error;
    }
}

$obj1 = new ChildClass;
$obj2 = new SecondChildClass;
var_dump($obj1->getErrors());
HTML::br();
var_dump($obj2->getErrors());

// override priority: base class method -> trait method -> child class method

\Doc\helpers\HTML::h3('Conflicts');

trait Circle
{
    public function getRadius()
    {
        return 'radius';
    }

    public function getArea()
    {
        return 'Pi*radius^2';
    }
}

trait Square
{
    public function getSide()
    {
        return'side';
    }

    public function getArea()
    {
        return 'side*side';
    }
}

class Geometry
{
    use Circle, Square {
        Square::getArea insteadof Circle;
        Circle::getArea as circleArea;
    }
}

$geometry = new Geometry;
HTML::br();
var_dump($geometry->getArea(), $geometry->circleArea(), $geometry->getSide(), $geometry->getRadius());
HTML::br();


HTML::h3('Visability change');

trait Hello
{
    public function sayHello()
    {
        echo 'Hello';
    }
}

class ProtectedHello
{
    use Hello {
        Hello::sayHello as protected;
    }
    public function newHello() : void
    {
        $this->sayHello();
        HTML::br();
    }
}

(new ProtectedHello())->newHello();

class PrivateChangedHello
{
    use Hello {
        Hello::sayHello as private PrivateHello;
    }
    public function newHello() : void
    {
        $this->PrivateHello();
        HTML::br();
    }
}

(new PrivateChangedHello)->newHello();



HTML::h3('Composite trait');

trait A
{
    public function a()
    {
        return 'a';
    }
}

trait B
{
    public function b()
    {
        return 'b';
    }
}

trait AB
{
    use A, B {
        A::a as getA;
        B::b as protected getB;
    }
}

class ABClass
{
    use AB;
}

var_dump((new ABClass)->getA());
HTML::br();

HTML::h3('Abstract');

trait AbstractTrait
{
    public function nonAbstract(){}
    abstract function abs();
}

abstract class WithAbstractTrait
{
    use AbstractTrait;
}

class ImplementsAbstractTrait
{
    use AbstractTrait;

    public function abs()
    {

    }

}

HTML::h3('Static fields');

trait HasStatic
{
    public static $a = 1;
}

class SomeStaticMagic
{
    use HasStatic;
}

class AnotherStaticMagic
{
    use HasStatic;
}

SomeStaticMagic::$a = 'SomeStaticMagic';
AnotherStaticMagic::$a = 'AnotherStaticMagic';

var_dump(SomeStaticMagic::$a, AnotherStaticMagic::$a);

HTML::h3('Properties');