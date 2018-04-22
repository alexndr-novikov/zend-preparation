<?php use \Doc\helpers\HTML;

HTML::h1('$_​POST');
?>

<form METHOD="post">
    <p><input type="text" name="x.y"></p>
    <p><input type="number" name="some_number"></p>
    <p><input type="submit" value="Add post data on page"></p>
</form>

<?php
HTML::h2('$_POST content:');

HTML::tag('pre', print_r($_POST, true));
