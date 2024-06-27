<?php
require_once 'Paragraph.php';

$paragraph = new Paragraph('I ❤️ Hues & Arrays');
//unset($paragraph); // another way to __destruct
?>
<!doctype html>
<head>
    <title>To String</title>
</head>
<body>
<?= $paragraph ?>
</body>
</html>
