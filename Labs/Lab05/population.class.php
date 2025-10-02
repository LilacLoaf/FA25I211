<?php
/**
 * Author: Louie Zhu
 * Date: 3/15/2024
 * File: population.class.php
 * Description: This class defines parameters for connecting to the database.
 * The only public interface is the method named lookup that filters the population table with a 
 * country/region name. It returns an array containing year and population if the country/region
 * name is valid or an empty array otherwise.
 */

class Population
{
    //define the database connection object
    private $objDBConnection;

    //the constructor. It connects to the MySQL server and select the database for use.
    public function __construct() {
        $host = 'localhost';
        $login = 'phpuser';
        $password = "phpuser";
        $database = "world_population";
        $this->objDBConnection = @new mysqli($host, $login, $password, $database);
        if ($this->objDBConnection->connect_error) {
            $errno = $this->objDBConnection->connect_errno;
            $errmsg = $this->objDBConnection->connect_error;
            die("Connecting database failed: ($errno) $errmsg <br/>\n");
        }
    }

    /* This method accepts a country/region name as the parameter. It filters the population table with the name.
    *  It returns an array containing year and population if the name is valid; an empty array is returned if the name is invalid.
    *
    */
    public function lookup($name) {
        $population_array = array();  //array for storing population figures

        //query the database with country/region name only
        $sql = "SELECT * FROM population WHERE name='$name'";

        //execute the query
        $results = $this->objDBConnection->query($sql);

        //If there is no row returned, return an error message
        if (!$results->num_rows) {
            return ["error" => "Name not found"];
        }

        //query the database with country/region name and "world"
        $sql = "SELECT * FROM population WHERE name='$name' OR name='world'";

        //execute the query
        $results = $this->objDBConnection->query($sql);

        //retrieve query results and store them in population_array
        while(($row = $results->fetch_assoc()) !== NULL) {
            //store country name and code as metadata in the array
            if(!array_key_exists('metadata', $population_array) AND !strcasecmp( $row['name'], $name)) {
                $population_array['metadata'] = ["name" => $row['name'], 'code' => $row['code']];
            }

            $population_array[$row['year']][$row['name']] = round($row['value']);
        }

       // var_dump($population_array);

        return $population_array;
    }
}