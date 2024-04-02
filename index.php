<?php

require 'db.php';
// class movie defined

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Oop</title>
</head>

<body>
    <h1>PHP Oop</h1>
    <div class="container">
        <div class="row">
            <?php
            foreach ($movies as $movie) {
                echo "
                <div class='card col-3 p-0 m-3'>
                <img src=" . $movie->poster . ">
                <h4 class='text-danger'>" . $movie->getTitle() . "</h4>
                <p> Titolo Originale: " . $movie->originalTitle . "</p>
                <p> Data di uscita: " . $movie->year . "</p>
                <p> Durata: " . $movie->length . "</p>";

                foreach ($movie->genre as $genre) {
                    echo "Generi: " . $genre . ", ";
                }
                echo "
            <p> Trama: " . $movie->overview . "</p>
            <p> Diretto da: " . $movie->director->getDirector() . "</p>       
            </div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>