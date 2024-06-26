<?php
require_once 'Paragraph.php';

$paragraph = new Paragraph('I ❤️ Hues & Arrays');
//print $paragraph . PHP_EOL;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To String</title>
</head>
<body>
<?= $paragraph ?>
</body>
</html>
