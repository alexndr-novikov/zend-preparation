<?php use \Doc\helpers\HTML;
HTML::h1('$_​FILES');

?>
    <h4>Common example. one file</h4>
    <form method="post" enctype="multipart/form-data">
        <p><input type="hidden" name="MAX_FILE_FIZE" value="2000"></p>
        <p><input type="file" name="some_file"></p>
        <p><input type="submit"></p>
    </form>

    <h4>But if names are array e.g array_file[1], array_file[2], array_file[three]:</h4>
    <form method="post" enctype="multipart/form-data">
        <p><input type="file" name="array_file[1]"></p>
        <p><input type="file" name="array_file[2]"></p>
        <p><input type="file" name="array_file[three]"></p>
        <p><input type="submit"></p>
    </form>

<?php

HTML::pre($_FILES);

?>