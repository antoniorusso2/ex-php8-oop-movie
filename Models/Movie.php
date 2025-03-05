<?php

require_once './Traits/TitleFormatter.php';
class Movie
{
    use TitleFormatter;

    public string $title;
    protected Genre|array $genre;
    public int $year;
    public string $trama;


    function __construct(string $title, int $year, string $trama, Genre|array $genre)
    {
        $this->title = $title;
        $this->formatTitle();
        $this->year = $year;
        $this->trama = $trama;
        $this->genre = $genre;
    }

    //metodo per generi visto che sono degli oggetti di tipo Genre
    public function getGenres()
    {
        if (is_array($this->genre)) {
            $genres = [];
            //se è un array ciclo per ogni genere e ritorno l'array
            foreach ($this->genre as $genre) {
                $genres[] = $genre->getInfo();
            }
            return $genres;
        } else {
            //se invece è un oggetto ritorno l'array con il singolo oggetto
            return [$this->genre->getInfo()];
        }
    }

    public function getInfo(): array
    {
        return [
            'title' => $this->title,
            'year' => $this->year,
            'trama' => $this->trama,
            'genres' => $this->getGenres(),
        ];
    }
}
