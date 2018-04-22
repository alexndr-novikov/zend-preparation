<?php
namespace GetCalledTest;

use \Doc\helpers\HTML;

HTML::h1('get_called_class');


class A
{
    public function whoAmI()
    {
        var_dump(get_called_class());
        HTML::br();
    }

    public static function whoAmIStatic()
    {
        var_dump(get_called_class());
        HTML::br();
    }
}

class B extends A
{
}

(new A)->whoAmI();
A::whoAmIStatic();
(new B)->whoAmI();
B::whoAmIStatic();
