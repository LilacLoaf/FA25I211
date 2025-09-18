<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/9/2025
 * File: movie.class.php
 * Description:
 */

class Movie
{
    private ?int $id = null;
    private string $title, $rating, $release_date, $director, $image, $description;

    //the Movie class constructor initializes all Movie properties except movie id.
    public function __construct($title, $rating, $release_date, $director, $image, $description)
    {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getReleaseDate(): string
    {
        return $this->release_date;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

//get methods

public function setId(int $id): Movie{
        $this->id = $id;
        return $this;
}
}