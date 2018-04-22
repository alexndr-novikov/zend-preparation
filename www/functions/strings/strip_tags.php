<?php use \Doc\helpers\HTML;

HTML::h1('strip_tags');


$str = '
Lorem ipsum dolor sit amet,
<p>consectetur</p> adipiscing elit,
sed do <strong>eiusmod</strong> tempor incididunt ut
labore et dolore magna aliqua.
<?php echo 1; ?>
<?php
//comment
?>
<!-- HTML COMMENT -->
Ut enim ad minim veniam,<hr>
quis nostrud exercitation ullamco<br/>
laboris nisi ut aliquip<br>
ex ea
commodo
consequat.';

HTML::p(htmlspecialchars(strip_tags($str)));
HTML::p(htmlspecialchars(strip_tags($str, '<br>')));
HTML::p(htmlspecialchars(strip_tags($str, '<strong>')));
HTML::p(htmlspecialchars(strip_tags($str, '<php>')));
HTML::p(htmlspecialchars(strip_tags($str, '<hr>')));
