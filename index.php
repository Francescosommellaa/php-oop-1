<?php
// importare classi
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/Model/Movie.php';
?>


<!DOCTYPE html>
<html lang="en">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous' />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <div class="container my-5">
        <h1>Lista film:</h1>

        <div class="d-flex">
            <?php foreach ($db as $movie): ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title"><?php echo $movie->getinfo()  ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</head>

<body>

</body>

</html>