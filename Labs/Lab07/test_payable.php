<?php
/*
 * Author: Jonathan Nguyen
 * Date: 10/23/2025
 * Name: test_payable.php
 * Description: Demonstrates polymorphism by testing all Payable types.
 */
require_once("autoloading.php");

//Array Instance
$payables = [];

//Creating a new person instance
$p1 = new Person("John", "Doe");
$p2 = new Person("Jane", "Smith");


//Creating new instances for the other attributes
$payables[] = new Invoice("1234", "Laptop", 2, 799.99);
$payables[] = new Invoice("5678", "Monitor", 1, 199.99);
$payables[] = new HourlyEmployee($p1, "111-22-3333", 20.0, 45);
$payables[] = new SalariedEmployee($p2, "222-33-4444", 950.0);
$payables[] = new CommissionEmployee($p1, "333-44-5555", 5000.0, 0.1);
$payables[] = new BasePlusCommissionEmployee($p2, "444-55-6666", 4000.0, 0.05, 300.0);

foreach ($payables as $item) {
    echo $item . "<br>";
    // echo "Payment Due: $" . number_format($item->getPaymentAmount(), 2) . "<br><br>";
}

// echo "Total Invoices: " . Invoice::getInvoiceCount() . "<br>";
// echo "Total Employees: " . Employee::getEmployeeCount() . "<br>";
