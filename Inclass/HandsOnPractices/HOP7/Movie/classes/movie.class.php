<?php

/*
 * Author: Louie Zhu
 * Date: 03/13/2024
 * Name: movie.class.php
 * Description: the Movie class models a real-world movie.
 */

class Movie {

    //private data members
    private ?int $id; //nullable
    private string $title, $rating, $release_date, $director, $image, $description;

    //the Movie class constructor initializes all the class properties except movie id.
    public function __construct($title, $rating, $release_date, $director, $image, $description) {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }
    
    //get methods to return movie details
    //get the movie's id
    public function getId():int {
        return $this->id;
    }
    
    //get the movie's title
    public function getTitle():string {
        return $this->title;
    }
    
    //get the movie's rating
    public function getRating():string {
        return $this->rating;
    }
    //get the movie's release date
    public function getReleaseDate():string {
        return $this->release_date;
    }
    //get the movie's director
    public function getDirector():string {
        return $this->director;
    }
    //get the path and name of the movie's poster
    public function getImage():string {
        return $this->image;
    }
    //get the movie's description
    public function getDescription():string {
        return $this->description;
    }

    //set the movie's id
    public function setId($id):Movie {
        $this->id = $id;
        return $this;
    }

}