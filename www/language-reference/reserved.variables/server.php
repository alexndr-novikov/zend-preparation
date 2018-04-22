<?php use \Doc\helpers\HTML;

HTML::h1('$_​SERVER');

echo '<table class="table table-bordered">';
foreach ($_SERVER as $property => $value) {
    HTML::tr(HTML::td($property, false) .
        HTML::td(is_string($value) ? $value : print_r($value, true), false));
}
echo '</table>';
