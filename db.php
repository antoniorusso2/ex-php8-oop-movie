<?php

require_once  './Models/Movie.php';
require_once './Models/Genre.php';

// Creazione dei generi
$action = new Genre("Azione", "Film con scene di combattimento e inseguimenti.");
$comedy = new Genre("Commedia", "Film divertenti con situazioni comiche.");
$fantasy = new Genre("Fantasy", "Film con elementi magici e creature fantastiche.");

// Creazione dei film
$movies = [
    new Movie("Il Signore degli Anelli", 2001, "Un hobbit deve distruggere un anello magico.", [$fantasy, $action]),
    new Movie("Una notte da leoni", 2009, "Un gruppo di amici si sveglia a Las Vegas senza ricordi.", [$comedy]),
    new Movie("Matrix", 1999, "Un hacker scopre la verità sulla realtà.", $action)
];
