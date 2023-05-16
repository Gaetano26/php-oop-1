<?php

/**
 * Summary Class Category
 */
class Category
{
    public string $type;

    public string $genre;

    /**
     * Constructor
     *
     * @param string $type
     * @param string $genre
     */
    public function __construct(string $type, string $genre)
    {

        $this->type = $type;
        $this->genre = $genre;
    }

    
}