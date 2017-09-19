<?php use \Doc\helpers\HTML;
HTML::h1('Late Static Bindings');

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();
HTML::br();

class C {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who();
    }
}

class D extends C {
    public static function who() {
        echo __CLASS__;
    }
}

D::test();

HTML::h3('Context');

class E
{
    private function foo()
    {

    }

    public function test()
    {
        static::foo();
    }
}

class F extends E
{
    private function foo() {}
}

// (new F)->test(); // fatal error


class K {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class L extends K {
    public static function test() {
        K::foo();
        parent::foo();
        self::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}
class M extends L {
    public static function who() {
        echo __CLASS__."\n";
    }
}

M::test();
HTML::br();
L::test();
