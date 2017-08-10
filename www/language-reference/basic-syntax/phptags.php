<?php
    echo "Common tags<br>";
?>

<?
    echo "Short tags<br>";
?>

<?
echo "Short tags cause error if short_open_tag in php.ini is set to false";
?>

<p>Not available anymore starting from PHP7.0:</p>
<ul>
    <li><%, %></li>
    <li><%=</li>
    <li><script language="php"></li>
</ul>
