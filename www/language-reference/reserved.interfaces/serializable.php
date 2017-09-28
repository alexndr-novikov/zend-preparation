<?php use \Doc\helpers\HTML;

HTML::h1('Serializable');


class TestSubject implements Serializable
{
    public function __construct()
    {
        echo "Constructor triggered";
        HTML::br();
    }

    public function __destruct()
    {
        echo "Destructor triggered";
        HTML::br();
    }

    public function __sleep() // never called now
    {
        echo "Magic preserializer triggered";
        HTML::br();
        return (array)$this;
    }

    public function __wakeup() // never called now
    {
        echo "Magic deserializer triggered";
        HTML::br();
    }

    public function serialize(): string
    {
        echo "New serializer triggered";
        HTML::br();
        return 'new self;';
    }

    public function unserialize($serialized)
    {
        echo "New deserializer triggered";
        HTML::br();
    }
}

$object = new TestSubject;
HTML::br();

$serialized = serialize($object);
HTML::br();
echo $serialized;
HTML::br();
HTML::br();
var_dump(unserialize($serialized));
HTML::br();