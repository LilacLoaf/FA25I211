<?php
/*
 * Author: Nicholas Weatherspoon
 * Date: 10/22/2025
 * File: person.class.php
 * Description: File contains the person class and all it's attributes and methods
 */


//Creating the person class
class Person {
    //Creating the attribute for first name
    private string $first_name;
    //Creating the attribute for last name
    private string $last_name;

    //Creating the constructor function to create the first and last name
    public function __construct(string $first_name, string $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //Get method for first name
    public function getFirstName(): string {
        return $this->first_name;
    }
    //Set method for the first name
    public function setFirstName(string $first_name): void {
        $this->first_name = $first_name;
    }
    //Get method for the last name
    public function getLastName(): string {
        return $this->last_name;
    }
    //Set method for the last name
    public function setLastName(string $last_name): void {
        $this->last_name = $last_name;
    }
    //Method used to return the newly created employee
    public function __toString(): string {
        return "{$this->first_name} {$this->last_name}";
    }
}
?>

