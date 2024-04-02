<?php

// class movie defined
class Movie
{
    public $title;
    public $originalTitle;
    public $year;
    public $length;
    public $overview;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  string $_originalTitle
     * @param  string $_year
     * @param  string $_length
     * @param  string $_overview
     */

    //  constructor function
    function __construct($_title, $_originalTitle, $_year, $_length, $_overview)
    {
        $this->title = $_title;
        $this->originalTitle = $_originalTitle;
        $this->year = $_year;
        $this->length = $_length;
        $this->overview = $_overview;
    }

    // method that returns the title of the movie
    public function getTitle()
    {
        return $this->title . ":";
    }
}


$movie1 = new Movie(
    "Ritorno al futuro",
    "Back to the Future",
    "18/10/1985 ",
    "1h 56m",
    "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più 'carburante' per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all'epoca teenager, ma l'incontro aggiungerà altri problemi."
);

$movie2 = new Movie(
    "Dune - Parte 2",
    "Dune - Part 2",
    "28/02/2024",
    "2h 47m",
    "Segui il mitico viaggio di Paul Atreides mentre si unisce a Chani e ai Fremen mentre è sul sentiero di guerra per vendicarsi dei cospiratori che hanno distrutto la sua famiglia. Di fronte a una scelta tra l'amore della sua vita e il destino dell'universo conosciuto, Paul si sforza di prevenire un terribile futuro che solo lui può prevedere."
);

$movies = [
    $movie1,
    $movie2,
];
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
            <p>" . $movie->originalTitle . "</p>
            <p> " . $movie->year . "</p>
            <p> " . $movie->length . "</p>
            <p> " . $movie->overview . "</p>
            </li>";
        }
        ?>
    </ul>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>