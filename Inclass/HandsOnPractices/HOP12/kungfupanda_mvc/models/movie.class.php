<?php

/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * Name: movie.class.php
 * Description: the Movie class models a real-world movie.
 */

class Movie {

    //private data members
    private ?int $id; //auto-generated ids; nullable
    private string $title, $rating, $release_date, $director, $image, $description;

    // initialize properties in the constructor
    public function __construct($title, $rating, $release_date, $director, $image, $description) {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }
	
	// get the movie id
    public function getId(): ?int
    {
        return $this->id;
    }

    // get movie title
    public function getTitle(): string
    {
        return $this->title;
    }

    //get movie rating
    public function getRating(): string
    {
        return $this->rating;
    }

    // get movie release date
    public function getRelease_date(): string
    {
        return $this->release_date;
    }

    // get movie director
    public function getDirector(): string
    {
        return $this->director;
    }

    // get movie cover image
    public function getImage(): string
    {
        return $this->image;
    }

    // get movie description
    public function getDescription(): string
    {
        return $this->description;
    }

    //set movie id
    public function setId($id): void
    {
        $this->id = $id;
    }

}