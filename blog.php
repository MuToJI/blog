<?php

$files = glob(__DIR__ . '/../messages/*');

?>
<html xmlns="http://www.w3.org/1999/html">
<head></head>
<body>
<?php
foreach ($files as $file): ?>
    <hl><?= basename($file) ?></hl>
    <div><?= nl2br(htmlentities(file_get_contents($file))) ?></div>
<?php endforeach; ?>
<form method="GET">
    <input type="text" name="title"></br>
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit"/>
</form>
</body>
</html>

