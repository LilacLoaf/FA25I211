<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/11/2025
 * File: employee.class.php
 * Description:
 */

class Employee {
    //define attributes (separately due to changes in data types)
    //i think i can make these in one line but im not super certain
    private string $name, $title;
    private int $years;
    private float $salary;

    //create constructor
    public function __construct($name, $title, $years, $salary) {
        $this->name = $name;
        $this->title = $title;
        $this->years = $years;
        $this->salary = $salary;
    }
    //name getter method
    public function getName() {
        return $this->name;
    }
    //title getter method
    public function getTitle() {
        return $this->title;
    }
    //years old getter method
    public function getYears() {
        return $this->years;
    }
    //salary getter method
    public function getSalary() {
        return $this->salary;
    }
}