<?php

if (PHP_SAPI != 'cli') {
    throw new Exception('Script should be called only in command line way');
}


function line($content)
{
    print $content;
    print "\r\n";
}

line('$argv content:');
var_dump($argv); // script name + variables
