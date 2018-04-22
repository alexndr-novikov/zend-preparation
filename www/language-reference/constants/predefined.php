<?php
namespace foo;

function info()
{
    var_dump(__FUNCTION__);
}

trait tested
{
    public function traitFunction()
    {
        var_dump(__CLASS__);
        var_dump(__FUNCTION__);
        var_dump(__METHOD__);
        var_dump(__TRAIT__);
    }
}

class Test
{
    use tested;

    public function info()
    {
        echo '__CLASS__ : ';
        var_dump(__CLASS__);
        echo '<br>';
        echo '__DIR__ : ';
        var_dump(__DIR__);
        echo '<br>';
        echo '__LINE__ : ';
        var_dump(__LINE__);
        echo '<br>';
        echo '__FILE__ : ';
        var_dump(__FILE__);
        echo '<br>';
        echo 'self::class :';
        var_dump(self::class);
        echo '<br>';
    }
}


echo '__NAMESPACE__ : '; var_dump(__NAMESPACE__);
echo "<br>class Test method info()<br>";
(new Test())->info();
echo "<br>class Test trait method traitFunction()<br>";
(new Test())->traitFunction();
echo "<br>";echo 'Function info()'; echo '<br>';
info();
echo "<br>";
