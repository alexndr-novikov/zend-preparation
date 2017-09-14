<?php namespace Foo; ?>
<h1>Constructors and Destructors : namespace feature</h1><?php

class Bar
{
    function Bar()
    {
        echo 'This is not a constructor method because of namespace'; // won't be triggered
    }
}

new Bar;


