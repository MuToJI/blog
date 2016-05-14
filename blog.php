<?php

$files = glob (__DIR__ . '/../messages/*');

?>

<?php
foreach ($files as $file): ?>
<hl><?= basename($file) ?></hl>
<div><?= nl2br(htmlentities(file_get_contents($file))) ?><div>
        <?php endforeach; ?>


