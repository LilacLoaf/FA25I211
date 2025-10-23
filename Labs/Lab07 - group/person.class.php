<?php
/*
 * Author: Nicholas Weatherspoon
 * Date: 10/22/2025
 * File: person.class.php
 * Description: File contains the person class and all it's attributes and methods
 */


//Creating the person class
class Person {
    //Creating the attributes for the person class
    private string $firstName;
    private string $lastName;
    private string $socialSecurityNumber;

    // COnstructor to create the attributes for first name, last name, and SSN
    public function __construct(string $firstName, string $lastName, string $ssn) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialSecurityNumber = $ssn;
    }

    //Getter used to get the first name that was inputted
    public function getFirstName(): string {
        return $this->firstName;
    }
    //Setter used to set that assigned first name
    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }
    //Getter used to get the last name that was inputted
    public function getLastName(): string {
        return $this->lastName;
    }
    //Setter used to set that assigned last name
    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }
    //Getter used to get the integer inputted for the social security number.
    public function getSocialSecurityNumber(): string {
        return $this->socialSecurityNumber;
    }
    //Setter used to set that assigned social security number
    public function setSocialSecurityNumber(string $ssn): void {
        $this->socialSecurityNumber = $ssn;
    }

    // Utility method used to display the person's information.
    public function __toString(): string {
        return "{$this->firstName} {$this->lastName} (SSN: {$this->socialSecurityNumber})";
    }
}
?>

