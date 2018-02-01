<?php
/**
 * @var $contentSource
 * @var $contentEval
 */
?>
<p><a href="/">Back to list</a></p>
<table class="table">
    <thead>
    <tr>
        <th style="width: 50%;">Sourse code</th>
        <th style="width: 50%;">Eval</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="max-width: 800px; overflow:hidden;"><?= $contentSource; ?></td>
        <td><?= $contentEval; ?></td>
    </tr>
    </tbody>
</table>