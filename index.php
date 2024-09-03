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

    <!-- css -->
    <link rel="stylesheet" href="style/style.css">

    <title>php-oop-1</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Lista film:</h1>


        <div class="d-flex justify-content-start flex-wrap ">
            <?php foreach ($db as $movie): ?>
                <div class="card my-card flex-shrink-0">
                    <img src="<?php echo $movie->getImmage() ?>" class="card-img-top" alt="film img">
                    <div class="card-body my-card-body">
                        <h3 class="card-title"><?php echo $movie->getTitle()  ?></h3>
                        <p class="card-text"><?php echo $movie->getDescription()  ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $movie->getRegista()  ?></small></p>
                    </div>
                    <h2 class="text-center"><?php echo $movie->getTitle()  ?></h2>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>