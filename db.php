<?php

require './Models/Movies.php';
require './Models/Directors.php';

$movie1Director = new Director("Robert", "Zemeckis", "American");

$movie1 = new Movie(
    "Ritorno al futuro",
    "Back to the Future",
    "18/10/1985 ",
    "1h 56m",
    "Marty viaggia nel tempo al 1955 e rischia di cancellare la sua esistenza. Deve riparare il tempo e tornare al suo futuro.",
    array("Avventura", "Commedia", "Fantascienza"),
    "https://image.tmdb.org/t/p/original/AkmUoSHkxW9txpzZ52gCcWweEkE.jpg",
);

$movie1->director = $movie1Director;


$movie2Director = new Director("Denis", "Villeneuve", "Canadian");

$movie2 = new Movie(
    "Dune - Parte 2",
    "Dune - Part 2",
    "28/02/2024",
    "2h 47m",
    "Paul Atreides cerca vendetta e unisce i Fremen per affrontare l'Imperatore e il Barone Harkonnen. Deve compiere il suo destino e diventare il Messia che salverà Arrakis.",
    array("Action", "Adventure"),
    "https://image.tmdb.org/t/p/original/zozGfM5kO9qbx1XSvwDwrh6yTca.jpg"
);

$movie2->director = $movie2Director;

$movie3Director = new Director("Yorgos", "Lanthimos", "Greek");

$movie3 = new Movie(
    "Povere Creature",
    "Poor Things",
    "25/01/2024",
    "2h 22m",
    "Bella, donna riportata in vita con il cervello di un bambino, fugge con un avventuriero. Scopre la sua identità e combatte per la sua libertà e indipendenza.",
    array("Fantascenza", "Drammatico", "Commedia"),
    "https://image.tmdb.org/t/p/original/kpyN3APxvVaNsnzoeozB7Wt439m.jpg"
);

$movie3->director = $movie3Director;

$movie4Director = new Director("Christopher", "Nolan", "British");

$movie4 = new Movie(
    "Il cavaliere oscuro",
    "The Dark Knight",
    "23/07/2008",
    "2h 26m",
    "Batman combatte il Joker, un anarchico che vuole gettare Gotham City nel caos. Harvey Dent, il procuratore distrettuale, diventa Due Facce dopo un incidente. Batman salva Gotham, ma a caro prezzo.",
    array("Dramma", "Azione", "Crime", "Thriller"),
    "https://image.tmdb.org/t/p/original/qIhsgno1mjbzUbs4H6DaRjhskAR.jpg"
);

$movie4->director = $movie4Director;

$movie5Director = new Director("Ridley", "Scott", "British");

$movie5 = new Movie(
    "Napoleon",
    "Napoleon",
    "23/11/2023",
    "2h 38m",
    "Ufficiale rivoluzionario diventa imperatore, conquista Europa, ma viene esiliato. Cerca gloria, lascia dietro guerre e impero caduto.",
    array("Dramma", "Storia", "Guerra"),
    "https://image.tmdb.org/t/p/original/5Meo32HdrjIyN7Ne8vxBiPg2nSl.jpg"
);

$movie5->director = $movie5Director;

$movie6Director = new Director("Matt", "Reeves", "American");

$movie6 = new Movie(
    "The Batman",
    "The Batman",
    "03/03/2022",
    "2h 56m",
    "Batman indaga su un misterioso serial killer, l'Enigmista, che prende di mira Gotham City svelando segreti oscuri del passato di Batman.",
    array("Crime", "Mistero", "Thriller"),
    "https://image.tmdb.org/t/p/original/kfrNjwHRw0ORsPx8Scr3JJQuy1I.jpg"
);

$movie6->director = $movie6Director;

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6,
];
