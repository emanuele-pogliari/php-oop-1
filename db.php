<?php

require './Models/Movies.php';
require './Models/Directors.php';

$movie1Director = new Director("Denis", "Villeneuve", "Canadian");

$movie1 = new Movie(
    "Ritorno al futuro",
    "Back to the Future",
    "18/10/1985 ",
    "1h 56m",
    "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più 'carburante' per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all'epoca teenager, ma l'incontro aggiungerà altri problemi.",
    array("Action", "Adventure"),
);

$movie1->director = $movie1Director;


$movie2Director = new Director("Denis", "Villeneuve", "Canadian");

$movie2 = new Movie(
    "Dune - Parte 2",
    "Dune - Part 2",
    "28/02/2024",
    "2h 47m",
    "Segui il mitico viaggio di Paul Atreides mentre si unisce a Chani e ai Fremen mentre è sul sentiero di guerra per vendicarsi dei cospiratori che hanno distrutto la sua famiglia. Di fronte a una scelta tra l'amore della sua vita e il destino dell'universo conosciuto, Paul si sforza di prevenire un terribile futuro che solo lui può prevedere.",
    array("Action", "Adventure"),
);

$movie2->director = $movie2Director;

$movies = [
    $movie1,
    $movie2,
];
