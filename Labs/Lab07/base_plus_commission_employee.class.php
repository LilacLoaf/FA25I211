<?php
/*
 * Author: Paxton Darcy
 * Date: 2025-10-23
 * Name: base_plus_commission_employee.class.php
 * Description: Defines the BasePlusCommissionEmployee class that extends CommissionEmployee.
 */
require_once("commission_employee.class.php");

//Creating the commission class extending the commission employee
class BasePlusCommissionEmployee extends CommissionEmployee {
    private float $base_salary;

    //Creating the constructor for all fo the attributes used in this class
    public function __construct(Person $person, string $ssn, float $sales, float $commission_rate, float $base_salary) {
        parent::__construct($person, $ssn, $sales, $commission_rate);
        $this->base_salary = $base_salary;
    }

    //Get method
    public function getBaseSalary(): float {
        return $this->base_salary;
    }

    //Set method
    public function setBaseSalary(float $base_salary): void {
        $this->base_salary = $base_salary;
    }

    //Method to find the earning of the employees
    public function earnings(): float {
        return parent::earnings() + $this->base_salary;
    }

    //Method to get the payment amount
    public function getPaymentAmount(): float {
        return $this->earnings();
    }

    //Method used to display all the commission employee.
    public function __toString(): string {
        return "<h3>Base Plus Commission Employee</h3>" .
            "<strong>Name:</strong> {$this->getPerson()}<br>" .
            "<strong>Social Security Number:</strong> {$this->getSSN()}<br>" .
            "<strong>Employee ID:</strong> {$this->getEmployeeID()}<br>" .
            "<strong>Gross Sales:</strong> $" . number_format($this->getSales(), 2) . "<br>" .
            "<strong>Commission Rate:</strong> " . ($this->getCommissionRate() * 100) . "%<br>" .
            "<strong>Base Salary:</strong> $" . number_format($this->base_salary, 2) . "<br>" .
            "<strong>Earning:</strong> $" . number_format($this->earnings(), 2) . "<br><hr>";
    }
}

