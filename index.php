<?php
//controllo tipo di dati
declare(strict_types=1);

class Movie
{
    public string $title;
    public array $genres;
    public int $year;
    public string $trama;


    function __construct(string $title, int $year, string $trama, array|string $genres)
    {
        $this->title = $title;
        $this->year = $year;
        $this->trama = $trama;
        $this->genres = [$genres];
    }

    public function getInfo(): array
    {
        return [
            'title' => $this->title,
            'year' => $this->year,
            'trama' => $this->trama
        ];
    }
}

class Genre
{
    public string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
}

$movie1 = new Movie('Pulp Fiction', 1994, 'Trama di Pulp Fiction', 'Thriller');
$movie2 = new Movie('The Shawshank Redemption', 1994, 'Trama di The Shawshank Redemption',  ['Thriller', 'Drama']);

var_dump($movie1->getInfo());
var_dump($movie1);

var_dump($movie2->getInfo());
var_dump($movie2);
