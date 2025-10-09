<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/2/2025
 * File: population.php
 * Description:
 */

if (isset($_COOKIE["random"])) {
    $random = $_COOKIE["random"];
} else {
    $random = rand(1, 100);
    setcookie("random", $random);
}

//get the class
require_once "population.class.php";


//get thename from the query string
$name = $_GET["name"];
//make the population object
$pop = new Population();
//call the lookup method from the population.class to look up from the object
$look = $pop->lookup($name);
//return the daat
echo json_encode($look);







//population.php: This file handles the server-side scripting.
// It retrieves the name from a query string variable sent by an AJAX request,
// passes it to the lookup method defined in a Population object,
// and outputs a string representation of a JSON object.