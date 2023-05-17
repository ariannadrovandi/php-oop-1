<?php 

include __DIR__.'/Genre.php';

class Movie{
    public int $id;
    public string $title;
    public string $image;
    public float $vote;
    public $genre;

    public function __construct(string $title, string $image, float $vote, Genre $genre){
        $this->title = $title;
        $this->image = $image;
        $this->vote = $vote;
        $this->genre = $genre;
    }

    public function getDetails(){
        return "Title: $this->title, Vote: $this->vote, Genre: {$this->genre->name}";
    }
}

// $movie = new Movie();
