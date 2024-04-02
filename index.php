<?php

require 'db.php';
// class movie defined

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Oop</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center m-5">Programmazione orientata agli oggetti</h1>
        <div class="row justify-content-around">
            <?php
            foreach ($movies as $movie) {
                echo "
                <div class='card col-4 mb-5 border-0'>
                <img src=" . $movie->poster . ">
                <div class='card-body'>
                <h4 class=' fs-3 fw-bold'>" . $movie->getTitle() . "</h4>
                <p> <span class=' fs-4 fw-bold'> Titolo Originale: </span>" . $movie->originalTitle . "</p>
                <p class=' fs-5 fw-bold'> Data di uscita: " . $movie->year . "</p>
                <p class=' fs-5 fw-bold'> Durata: " . $movie->length . "</p>
                <p> <span class=' fs-5 fw-bold'>Generi: </span>";
                foreach ($movie->genre as $genre) {
                    echo $genre . ", ";
                }
                echo "</p>
            <p> <span class=' fs-5 fw-bold'>Trama: </span>" . $movie->overview . "</p>
            <p> <span class=' fs-5 fw-bold'>Diretto da: </span>" . $movie->director->getDirector() . "</p>       
            </div>
            </div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>