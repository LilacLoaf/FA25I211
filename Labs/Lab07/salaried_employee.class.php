<?php
/*
 * Author: Paxton Darcy
 * Date: 2025-10-23
 * Name: salaried_employee.class.php
 * Description: Defines the SalariedEmployee (Manager) class with bonus and department info.
 */
require_once("employee.class.php");

//Creating the salaried Employee class extending the employee class
class SalariedEmployee extends Employee {
    private float $weekly_salary;
    private int $years_of_service;
    private string $department;
    private float $bonus;

    //Creating the contructor for all the attributes of the class
    public function __construct(
        Person $person,
        string $ssn,
        float $weekly_salary,
        int $years_of_service = 0,
        string $department = "General",
        float $bonus = 0.0
    ) {
        //Using the parent class attributes
        parent::__construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
        $this->years_of_service = $years_of_service;
        $this->department = $department;
        $this->bonus = $bonus;
    }

    //Get Functions
    public function getWeeklySalary(): float {
        return $this->weekly_salary;
    }

    public function setWeeklySalary(float $salary): void {
        $this->weekly_salary = $salary;
    }

    //Get Function
    public function getYearsOfService(): int {
        return $this->years_of_service;
    }

    public function setYearsOfService(int $years): void {
        $this->years_of_service = $years;
    }

    //Get Function
    public function getDepartment(): string {
        return $this->department;
    }

    public function setDepartment(string $dept): void {
        $this->department = $dept;
    }

    //Get Function
    public function getBonus(): float {
        return $this->bonus;
    }

    public function setBonus(float $bonus): void {
        $this->bonus = $bonus;
    }

    public function earnings(): float {
        return $this->weekly_salary + $this->bonus;
    }

    public function getPaymentAmount(): float {
        return $this->earnings();
    }

    public function __toString(): string {
        return "<h3>Manager</h3>" .
            "<strong>Name:</strong> {$this->getPerson()}<br>" .
            "<strong>Social Security Number:</strong> {$this->getSSN()}<br>" .
            "<strong>Employee ID:</strong> {$this->getEmployeeID()}<br>" .
            "<strong>Years of Service:</strong> {$this->years_of_service}<br>" .
            "<strong>Department:</strong> {$this->department}<br>" .
            "<strong>Salary:</strong> $" . number_format($this->weekly_salary, 2) . "<br>" .
            "<strong>Bonus:</strong> $" . number_format($this->bonus, 2) . "<br>" .
            "<strong>Earning:</strong> $" . number_format($this->earnings(), 2) . "<br><hr>";
    }
}


