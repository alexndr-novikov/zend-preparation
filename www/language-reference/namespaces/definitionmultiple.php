<?php

namespace Project1 {
    const PROJECT_ID = 1;

    class PROJECT
    {
        public function __construct()
        {
            echo __CLASS__;
        }
    }
    function project()
    {
        echo __FUNCTION__;
    }
}

namespace Project2 {
    const PROJECT_ID = 2;

    class PROJECT
    {
        public function __construct()
        {
            echo __CLASS__;
        }
    }
    function project()
    {
        echo __FUNCTION__;
    }
}

namespace {
    use \Doc\helpers\HTML;

    HTML::h1('Defining multiple namespaces in the same file');

    echo \Project1\PROJECT_ID;
    HTML::br();
    new \Project1\PROJECT;
    HTML::br();
    \Project1\project();
    HTML::br();HTML::br();

    echo \Project2\PROJECT_ID;
    HTML::br();
    new \Project2\PROJECT;
    HTML::br();
    \Project2\project();
}
