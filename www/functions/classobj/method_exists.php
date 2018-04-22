<?php use \Doc\helpers\HTML;

HTML::h1('method_exists');

class A
{
    public function fa()
    {
    }

    protected function fb()
    {
    }
    private function fc()
    {
    }

    private static function fd()
    {
    }
}

HTML::dump(method_exists('A', 'fa')); // true
HTML::dump(method_exists(new A, 'fb')); // true
HTML::dump(method_exists(new A, 'fc')); // true
HTML::dump(method_exists(new A, 'fd')); // true
