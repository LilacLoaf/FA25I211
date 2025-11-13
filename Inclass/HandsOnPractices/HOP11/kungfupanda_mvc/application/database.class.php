<?php

/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * File: database,class.php
 * Description: Description: the Database class sets the database details.
 * 
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'kungfupanda_db',
        'tblMovie' => 'movies',
        'tblBook' => 'books',
        'tblGame' => 'games',
        'tblCD' => 'cds',
        'tblMovieRating' => 'movie_ratings',
        'tblBookCategory' => 'book_categories'
    );
    //define the database connection object
    private mysqli $objDBConnection;
    static private ?Database $_instance = null;

    //constructor
    private function __construct() {
        $this->objDBConnection = @new mysqli(
                $this->param['host'], $this->param['login'], $this->param['password'], $this->param['database']
        );
        if (mysqli_connect_errno() != 0) {
            $message = "Connecting database failed: " . mysqli_connect_error() . ".";
            include 'error.php';
            exit();
        }
    }

    //static method to ensure there is just one Database instance
    static public function getDatabase(): Database
    {
        return (self::$_instance == null) ? new Database() : self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection(): mysqli
    {
        return $this->objDBConnection;
    }

    //returns the name of the table that stores movies
    public function getMovieTable(): string
    {
        return $this->param['tblMovie'];
    }

    //returns the name of the table that stores books
    public function getBookTable(): string
    {
        return $this->param['tblBook'];
    }

    //returns the name of the table storing games
    public function getGameTable(): string
    {
        return $this->param['tblGame'];
    }

    //returns the name of the table storing cds
    public function getCDTable(): string
    {
        return $this->param['tblCD'];
    }

    //returns the name of the table storing movie ratings
    public function getMovieRatingTable(): string
    {
        return $this->param['tblMovieRating'];
    }

    //return the name of the table that stores book categories
    public function getBookCategoryTable(): string
    {
        return $this->param['tblBookCategory'];
    }

}
