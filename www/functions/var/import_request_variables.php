<?php use \Doc\helpers\HTML;
HTML::h1('import_request_variables');

HTML::p('Removed since PHP5.4');
try {
    import_request_variables();
} catch (\Error $e) {
    echo $e->getMessage();
}