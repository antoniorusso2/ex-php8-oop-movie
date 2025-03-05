<?php
//controllo tipo di dati
require_once './db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Films</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Films</h1>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($movies as $movie) {
                $movieInfo = $movie->getInfo();
                $movieGenres = $movie->getGenres();

            ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movieInfo['title'] ?></h5>
                            <p class="card-text"><?= $movieInfo['trama'] ?></p>
                            <p class="card-text">Anno: <?= $movieInfo['year'] ?></p>
                            <p class="card-text">Generi:</p>
                            <ul>
                                <?php
                                foreach ($movieGenres as $genre) {

                                ?>
                                    <li><?= $genre['name'] ?></li>

                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            <?php

            }
            ?>


        </div>

    </div>

</body>

</html>