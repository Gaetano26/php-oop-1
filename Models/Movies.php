<?php

include __DIR__ . '/Category.php';
/**
 * Summary Class Movies
 */
class Movie
{
    public string $title;
    public string $origine_title;
    public string $nationality;
    public int $vote;
    public string $image;
    public string $category;
    private $availableFlags = [
        'en',
        'it',
        'es',
        'fr',
        'de',
    ];

    /**
     * constructor
     *
     * @param string $title
     * @param string $origine_title
     * @param string $nationality
     * @param integer $vote
     * @param string $image
     */
    public function __construct( string $title, string $origine_title, string $nationality, int $vote ,string $image, Category $category)
    {
        $this->title = $title;
        $this->origine_title = $origine_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->image = $image;
        $this->category = $category;
    }

    public function getFlag()
    {
        if (in_array($this->nationality, $this->availableFlags)) {
            return "<img class='flag' src='img/$this->nationality.png' alt='$this->nationality'>";
        } else {
            return "<span>Unavailable</span>";
        }
    }
    
}

