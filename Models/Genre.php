<?php

class Genre
{
    protected string $name;
    protected string $description;

    function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getInfo(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
        ];
    }
}
