<?php

/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * File: movie_controller.class.php
 * Description: the movie controller
 *
 */

class MovieController {

    private MovieModel $movie_model;

    //default constructor
    public function __construct() {
        //create an instance of the MovieModel class
        $this->movie_model = MovieModel::getMovieModel();
    }

    //index action that displays all movies
    public function index(): void
    {
        //retrieve all movies and store them in an array
        $movies = $this->movie_model->list_movie();

        if (!$movies) {
            //display an error
            $this->error("There was a problem displaying movies.");
            return;
        }

        // display all movies
        $view = new MovieIndex();
        $view->display($movies);
    }

    //show details of a movie
    public function detail($id): void
    {
        //retrieve the specific movie
        $movie = $this->movie_model->view_movie($id);

        if (!$movie) {
            //display an error
            $this->error("There was a problem displaying the movie id='" . $id . "'.");
            return;
        }

        //display movie details
        $view = new MovieDetail();
        $view->display($movie);
    }

    //display a movie in a form for editing
    public function edit($id): void
    {
        //retrieve the specific movie
        $movie = $this->movie_model->view_movie($id);

        if (!$movie) {
            //display an error
            $this->error("There was a problem displaying the movie id='" . $id . "'.");
            return;
        }

        $view = new MovieEdit();
        $view->display($movie);
    }

    //update a movie in the database
    public function update($id): void
    {
        //update the movie
        $update = $this->movie_model->update_movie($id);
        if (!$update) {
            //handle errors
            $this->error("There was a problem updating the movie id='" . $id . "'.");
            return;
        }

        //display the updated movie details
        $confirm = "The movie was successfully updated.";
        $movie = $this->movie_model->view_movie($id);

        $view = new MovieDetail();
        $view->display($movie, $confirm);
    }

    //search movies
    public function search(): void
    {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all movies
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching movies
        $movies = $this->movie_model->search_movie($query_terms);

        if ($movies === false) {
            //handle error
            $this->error("An error has occurred.");
            return;
        }
        //display matched movies
        $search = new MovieSearch();
        $search->display($query_terms, $movies);
    }

    //autosuggestion
    public function suggest($terms): void
    {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $movies = $this->movie_model->search_movie($query_terms);

        //retrieve all movie titles and store them in an array
        $titles = array();
        if ($movies) {
            foreach ($movies as $movie) {
                $titles[] = $movie->getTitle();
            }
        }

        echo json_encode($titles);
    }

    //handle an error
    public function error($message): void
    {
        //create an object of the Error class
        $error = new MovieError();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        // Note: value of $name is case sensitive.
        $this->error("Calling method '$name' caused errors. Route does not exist.");
        return;
    }

}
