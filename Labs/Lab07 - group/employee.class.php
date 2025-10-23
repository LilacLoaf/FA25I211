<?php
/*
 * Author: Nicholas Weatherspoon
 * Date: 10/22/2025
 * File: employee.class.php
 * Description: File contains the employee class and all it's methods and attributes.
 */

//Must-read from the payable and person files.
require_once 'payable.class.php';
require_once 'person.class.php';

//Create the Employee class implementing payable and abstract
abstract class Employee implements Payable {

    // Static attribute that allows us to track how many employees are created.
    protected static int $employeeCount = 0;

    // Class attributes
    protected Person $person;
    protected string $employeeId;

    // Constructor
    public function __construct(Person $person, string $employeeId) {
        $this->person = $person;
        $this->employeeId = $employeeId;
        //Adding to the employee count everytime an employee is created
        self::$employeeCount++;
    }

    // Method to find earnings
    abstract public function earnings(): float;

    // Implement function method from payable
    public function getPaymentAmount(): float {
        return $this->earnings();
    }

    // Accessing getPerson
    public function getPerson(): Person {
        return $this->person;
    }
    //Accessing setPerson
    public function setPerson(Person $person): void {
        $this->person = $person;
    }
    //Accessing getEmployeeID
    public function getEmployeeId(): string {
        return $this->employeeId;
    }
    //Accessing setEmployeeId
    public function setEmployeeId(string $id): void {
        $this->employeeId = $id;
    }

    // Static method to return the employees
    public static function getEmployeeCount(): int {
        return self::$employeeCount;
    }

    //String method used to display the current employees information
    public function __toString(): string {
        return "Employee ID: {$this->employeeId}, {$this->person}";
    }
}
?>

