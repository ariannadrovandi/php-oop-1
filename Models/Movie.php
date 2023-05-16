<?php 

class Movie{
    public int $id;
    public string $title;
    public string $image;
    public float $vote;
    public $genre;

    public function __construct(string $title, string $image, float $vote, $genre){
        $this->title = $title;
        $this->image = $image;
        $this->vote = $vote;
        $this->genre = $genre;
    }

}