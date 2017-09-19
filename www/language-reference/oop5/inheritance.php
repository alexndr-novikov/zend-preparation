<h1>Object Inheritance</h1><?php

class GrandClass
{
    public function getAge()
    {
        return 80;
    }

    public function family()
    {
        echo 'We are family';
        \Doc\helpers\HTML::br();
    }
}

class ParentClass extends GrandClass
{
    public function getAge()
    {
        return 40;
    }
}

class ChildClass extends GrandClass
{
    public function getAge()
    {
        return 20;
    }
}

$granny = new GrandClass();
$parent = new ParentClass();
$child = new ChildClass();

$granny->family();
$parent->family();
$child->family();


echo 'Age: ' . $granny->getAge();\Doc\helpers\HTML::br();
echo 'Age: ' . $parent->getAge();\Doc\helpers\HTML::br();
echo 'Age: ' . $child->getAge();\Doc\helpers\HTML::br();