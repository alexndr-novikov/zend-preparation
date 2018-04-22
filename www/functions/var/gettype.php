<?php use \Doc\helpers\HTML;

HTML::h1('gettype');

$resource = curl_init();
$function = function () {
    yield from range(1, 2);
};

$variables = [true, null, 1, 1.1, '1.1', [], new stdClass, $resource, $function, $function()];
foreach ($variables as $variable) {
    HTML::p(gettype($variable));
}
