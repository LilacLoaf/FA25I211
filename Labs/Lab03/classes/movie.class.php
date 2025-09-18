<?php

/*
 * Author: Louie Zhu
 * Date: 8/21/2020
 * Name: movie.class.php
 * Description: the Movie class models a real-world movie.
 */

class Movie {

    //private data members of Movie object
    private $id, $title, $rating, $release_date, $director, $image, $description;

    //the constructor that initializes all the movie attributes
    public function __construct(string $title, string $rating, string $release_date, string $director, string $image, string $description) {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }
    
    // Get the id of a movie
    public function getId():int {
        return $this->id;
    }

    // Get the title of a movie
    public function getTitle():string {
        return $this->title;
    }

    // Get the rating of a movie
    public function getRating():string {
        return $this->rating;
    }

    // Get the release date of a movie
    public function getReleaseDate():string {
        return $this->release_date;
    }
    
    // Get the director of a movie
    public function getDirector():string {
        return $this->director;
    }

    // Get the image file name and path of a movie
    public function getImage():string {
        return $this->image;
    }

    // Get the description of a movie
    public function getDescription():string {
        return $this->description;
    }

    //set the movie id
    public function setId(int $id) {
        $this->id = $id;
    }

}