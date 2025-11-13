<?php
/**
 * Author: Jonathan Nguyen
 * Date: 11/4/2025
 * File: toy_model.class.php
 * Description:
 */

class ToyModel
{
    //define a database object
    private Database $db;
    //define a database connection object
    private mysqli $dbconnection;

    public function __construct()
    {
        //initialize data members *
        $this->db = Database::getInstance();
        $this->dbconnection = $this->db->getConnection();
    }

    /*
 * this method retrieves all toys from the database and
 * returns an array of Toy objects if successful or false if failed.
 */
    public function getToys(): false|array
    {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getToyTable();

        //execute the query
        $query = $this->dbconnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all toys
            $toys = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $toy = new Toy($query_row["id"],
                    $query_row["name"],
                    $query_row["description"],
                    $query_row["price"]);

                //push the toy into the array
                $toys[] = $toy;
            }
            return $toys;
        }
        return false;
    }


}