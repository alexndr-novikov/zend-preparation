<?php

if (PHP_SAPI !== 'cli')
{
    echo 'This example can not be reproduced in web, check direct launch via php chroot.php';
    return;
}

echo getcwd();
echo "\r\n";
chroot('/');
echo "\r\n";
echo getcwd();