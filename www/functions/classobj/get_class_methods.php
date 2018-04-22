<?php use \Doc\helpers\HTML;

HTML::h1('get_class_methods');

echo '<pre>';
class Caller
{
    public function one()
    {
    }

    protected function two()
    {
    }

    private function three()
    {
    }

    public function __construct()
    {
    }

    public static function methods()
    {
        print_r(get_class_methods(self::class));
        HTML::br();
    }

    public function classMethods()
    {
        print_r(get_class_methods($this));
        HTML::br();
    }
}

print_r(get_class_methods('Caller'));
HTML::br();
print_r(get_class_methods(new Caller));
HTML::br();
Caller::methods();
(new Caller())->classMethods();
