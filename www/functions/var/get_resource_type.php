<?php use \Doc\helpers\HTML;

HTML::h1('get_resource_type');


$fp = fopen("foo", "w");
HTML::p(get_resource_type($fp));

$resource = curl_init();
HTML::p(get_resource_type($resource));
