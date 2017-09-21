<?php use \Doc\helpers\HTML;
HTML::h1('Basics');
error_reporting(E_ALL & ~E_NOTICE);

var_dump(ini_get('error_reporting'));
HTML::br();
var_dump(ini_get('display_errors'));

?>
<ul>
    <li>error_reporting in php.ini</li>
    <li>error_reporting() in php code</li>
    <li>display_errors in php.ini</li>
    <li>log_errors in php.ini (writes to error_log param in php.ini)</li>
    <li>use set_error_handler()</li>
</ul>