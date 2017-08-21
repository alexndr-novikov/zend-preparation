<?php
setcookie("External[first]", rand(0, 100), time() + 30);
setcookie("External[second]", rand(0, 100), time() + 30);
?>
<form method="post">
    <p><input type="text" name="test.value"></p>
    <p><input type="submit"></p>
</form>

<a href="?param.name=some">Link with GET param</a> <?php // . in name is converted to _ ?>

<?php // form with params sent as arrays ?>
<form action="" method="post">
    Name:  <input type="text" name="personal[name]" /><br />
    Mail: <input type="text" name="personal[email]" /><br />
    Option: <br />
    <select multiple name="beer[]">
        <option value="one">one</option>
        <option value="two">two</option>
        <option value="three">three</option>
    </select><br />
    <input type="submit" />
</form>

<?php //image as form send trigger adds position of click as inputName.x and inputName.y (inputName_x and inputName_y got in backend) ?>
<form action="" method="post">
    <input type="image" name="images" src="https://www.google.by/images/branding/googlelogo/2x/googlelogo_color_120x44dp.png">
</form>

<?php
echo '<br>$_POST<br>';
var_dump($_POST);
echo '<br>$_REQUEST<br>';
var_dump($_REQUEST);
echo '<br>$_GET<br>';
var_dump($_GET);
echo '<br>$_COOKIE<br>';
var_dump($_COOKIE);