<?php
/*
 * Author: Paxton Darcy
 * Date: 2025-10-23
 * Name: commission_employee.class.php
 * Description: Defines the CommissionEmployee class that extends Employee.
 */
require_once("employee.class.php");

//Commission Employee
class CommissionEmployee extends Employee {
    private float $sales;
    private float $commission_rate;

    //Constructor used to create all of the values to the attributes
    public function __construct(Person $person, string $ssn, float $sales, float $commission_rate) {
        parent::__construct($person, $ssn);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }

    //Get method
    public function getSales(): float {
        return $this->sales;
    }

    //Set method
    public function setSales(float $sales): void {
        $this->sales = $sales;
    }

    //Get method
    public function getCommissionRate(): float {
        return $this->commission_rate;
    }

    //Set method
    public function setCommissionRate(float $rate): void {
        $this->commission_rate = $rate;
    }

    //Overriding the parent class method
    public function earnings(): float {
        return $this->sales * $this->commission_rate;
    }

    //Overriding the parent class method
    public function getPaymentAmount(): float {
        return $this->earnings();
    }

    //Display the sales person information.
    public function __toString(): string {
        return "<h3>Sales Person</h3>" .
            "<strong>Name:</strong> {$this->getPerson()}<br>" .
            "<strong>Social Security Number:</strong> {$this->getSSN()}<br>" .
            "<strong>Employee ID:</strong> {$this->getEmployeeID()}<br>" .
            "<strong>Gross Sales:</strong> $" . number_format($this->sales, 2) . "<br>" .
            "<strong>Commission Rate:</strong> " . ($this->commission_rate * 100) . "%<br>" .
            "<strong>Earning:</strong> $" . number_format($this->earnings(), 2) . "<br><hr>";
    }
}


