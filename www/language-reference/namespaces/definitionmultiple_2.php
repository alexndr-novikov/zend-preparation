<?php

namespace Project1;

const PROJECT_ID = 1;

class PROJECT {
    public function __construct()
    {
        echo __CLASS__;
    }

}
function project() {
    echo __FUNCTION__;
}

namespace Project2;

const PROJECT_ID = 2;

class PROJECT {
    public function __construct()
    {
        echo __CLASS__;
    }

}
function project() {
    echo __FUNCTION__;
}