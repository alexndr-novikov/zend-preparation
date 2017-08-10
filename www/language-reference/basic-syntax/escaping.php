<?php

?>
<p>PHP code is separated from plain text. This text is ignored by interpretator and outputs as-is</p>
<?= 'This text is processed' ?>
<?php if(true): ?>
<p>this text is outputted</p>
<?php else: ?>
    this text is never reached
<?php endif; ?>
<p>Plain text is more effective then echo or print();</p>
<h4>starting from PHP5.4 always avaliable</h4>
<ul>
    <li>&lt;?php ?></li>
    <li>&lt;= ?> (before 5.4 needed short open tag option on)</li>
    <li>&lt;script language="php"> &lt;/script></li>
</ul>
<ul>
    <li>&lt;? ?> enabled with short_open_tags option on in php.ini</li>
    <li>&lt;% %>  &lt;%= %> available with asp_tags=true in php.ini</li>
</ul>

<h4>starting from PHP7 avaliable</h4>
<ul>
    <li>&lt;php ?></li>
    <li>&lt;= ?></li>
    <li>&lt;? ?> enabled with short_open_tags option on in php.ini (not recommended)</li>
</ul>
