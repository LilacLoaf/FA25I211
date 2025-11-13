<?php
/*
 * Author: Jonathan Nguyen
 * Date: 2025-10-23
 * Name: hourly_employee.class.php
 * Description: Defines the HourlyEmployee class that extends Employee.
 */
require_once("employee.class.php");

//Creating the hourlyEmployee class extending the Employee class
class HourlyEmployee extends Employee {
    private float $wage;
    private int $hours;

    //Constructors used to assign the values after initialization
    public function __construct(Person $person, string $ssn, float $wage, int $hours) {
        parent::__construct($person, $ssn);
        $this->wage = $wage;
        $this->hours = $hours;
    }

    //Get method
    public function getWage(): float {
        return $this->wage;
    }

    //Set method
    public function setWage(float $wage): void {
        $this->wage = $wage;
    }

    //Get method
    public function getHours(): int {
        return $this->hours;
    }

    //Set method
    public function setHours(int $hours): void {
        $this->hours = $hours;
    }

    //Method to calculate earnings
    public function earnings(): float {
        if ($this->hours <= 40) {
            return $this->wage * $this->hours;
        } else {
            return 40 * $this->wage + ($this->hours - 40) * $this->wage * 1.5;
        }
    }

    //Method to return payment information
    public function getPaymentAmount(): float {
        return $this->earnings();
    }

    //Function to display all the information.
    public function __toString(): string {
        return "<h3>Secretary</h3>" .
            "<strong>Name:</strong> {$this->getPerson()}<br>" .
            "<strong>Social Security Number:</strong> {$this->getSSN()}<br>" .
            "<strong>Wage per hour:</strong> $" . number_format($this->wage, 2) . "<br>" .
            "<strong>Hours:</strong> {$this->hours}<br>" .
            "<strong>Earning:</strong> $" . number_format($this->earnings(), 2) . "<br><hr>";
    }
}


