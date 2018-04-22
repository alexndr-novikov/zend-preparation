<?php use \Doc\helpers\HTML;
use \Faker\Factory;

HTML::h1('array_column()');


class Person
{
    public function __construct(int $id, string $name, string $lastName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public $name;
    public $lastName;
    public $id;
}

$dataFactory = Factory::create();
$array = [
    new Person(1, 'Alex', 'Novikov'),
    new Person($dataFactory->numberBetween(0, 100), $dataFactory->firstName(), $dataFactory->lastName),
    new Person($dataFactory->numberBetween(0, 100), $dataFactory->firstName(), $dataFactory->lastName),
    new Person($dataFactory->numberBetween(0, 100), $dataFactory->firstName(), $dataFactory->lastName),
    new Person($dataFactory->numberBetween(0, 100), $dataFactory->firstName(), $dataFactory->lastName),
    new Person($dataFactory->numberBetween(0, 100), $dataFactory->firstName(), $dataFactory->lastName),
    new Person($dataFactory->numberBetween(0, 100), $dataFactory->firstName(), $dataFactory->lastName),
];

HTML::pre(array_column($array, 'name'));
HTML::pre(array_column($array, 'name', 'id'));
HTML::pre(array_column($array, 'name', 'lastName'));
HTML::br();
HTML::br();
HTML::br();
HTML::pre(array_column($array, 'name', 'noFieldExists')); // uses integer index
HTML::br();
HTML::br();
HTML::pre(array_column($array, 'noFieldExists')); // empty array
