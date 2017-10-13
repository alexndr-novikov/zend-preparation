<?php use \Doc\helpers\HTML;
HTML::h1('$HTTP_​RAW_​POST_​DATA');
?>
<p>deleted in php 7. Emulate:</p>
    <form METHOD="post">
        <p><input type="text" name="x.y"></p>
        <p><input type="text" name="some_number"></p>
        <p><input type="submit" value="Add post data on page"></p>
    </form>


<?php

var_dump(file_get_contents("php://input"));