<?php
// importare classi
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/data/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <ul>
        <li><?php echo $Movie->getInfo() ?></li>
    </ul>
</head>

<body>

</body>

</html>