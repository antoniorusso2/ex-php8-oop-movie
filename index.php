<?php
//controllo tipo di dati
declare(strict_types=1);

class Movie
{
    public string $title;
    public string $year;
    public array $genre;
    public string $director;
    public array $cast;

    function __construct(string $_title, string $_year, array $_genre, string $_director, array $_cast)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->cast = $_cast;
    }

    public function getInfo(): array
    {
        return [
            'title' => $this->title,
            'year' => $this->year,
            'genre' => $this->genre,
            'director' => $this->director,
            'cast' => $this->cast
        ];
    }
}
