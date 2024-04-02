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
    <h4></h4>
    <ul>
        <?php
        foreach ($movies as $movie) {

            echo "
            <li>
            <h4>" . $movie->getTitle() . "</h4>
            <p> " . $movie->originalTitle . "</p>
            <p> " . $movie->year . "</p>
            <p> " . $movie->length . "</p>
            <p> " . $movie->overview . "</p>
            <p> " . $movie->director->getDirector() . "</p>            
            </li>";
        }
        ?>
    </ul>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>