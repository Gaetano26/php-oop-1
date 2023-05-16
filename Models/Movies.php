<?php

class Movie
{
    public $title;
    public $origine_title;
    public $nationality;
    public $vote;
    public $image;

    public function __construct($title, $origine_title, $nationality, $image, $vote)
    {
        $this->title = $title;
        $this->origine_title = $origine_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->image = $image;
    }
    
}