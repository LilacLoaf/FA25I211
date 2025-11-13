<?php
/*
 * Author: Nicholas Weatherspoon
 * Date: 2025-10-23
 * Name: employee.class.php
 * Description: Abstract Employee class implementing Payable. Uses Person (composition).
 */

//
require_once("payable.class.php");
require_once("person.class.php");

//Creating the employee class implementing payable class
abstract class Employee implements Payable {
    protected Person $person;
    private string $ssn;
    private int $employee_id;
    protected static int $employee_count = 0;

    //Constructor used to create the values assigned with the attributes of this class
    public function __construct(Person $person, string $ssn) {
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count++;
        $this->employee_id = self::$employee_count;
    }

    // Required abstract method for subclasses
    abstract public function earnings(): float;

    //Get method
    public function getSSN(): string {
        return $this->ssn;
    }

    //Set method
    public function setSSN(string $ssn): void {
        $this->ssn = $ssn;
    }

    //Get method
    public function getPerson(): Person {
        return $this->person;
    }

    //Set method
    public function setPerson(Person $person): void {
        $this->person = $person;
    }

    //Get method
    public function getEmployeeID(): int {
        return $this->employee_id;
    }

    //Get method
    public static function getEmployeeCount(): int {
        return self::$employee_count;
    }

    //Reset method
    public static function resetEmployeeCount(): void {
        self::$employee_count = 0;
    }

    //Method to display the person as a string
    public function __toString(): string {
        return $this->person->__toString();
    }
}


