<h1>Final Keyword</h1><?php


class FinalMethodInside
{
    final public function a()
    {

    }

    public function b()
    {

    }
}

class FinalMethodInsideExtended extends FinalMethodInside
{
    public function b() // ok
    {

    }

    // public function a() {} // causes fatal error because of final
}

final class FinalClass
{

}

// class ExtendFinal extends FinalClass {} // causes fatal error