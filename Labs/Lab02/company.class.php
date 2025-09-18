<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/11/2025
 * File: company.class.php
 * Description:
 */

class Company{
    //create attributes
    private string $name, $established_date, $url;
    //create employees array attribute
    private array $employees;
//create constructor
    public function __construct(string $name, string $established_date, string $url, array $employees=[]){
        $this->name = $name;
        $this->established_date = $established_date;
        $this->url = $url;
        $this->employees = $employees;
    }

    //company name getter
    public function getName(){
        return $this->name;
    }
    //establish date getter
    public function getEstablishedDate(){
        return $this->established_date;
    }
    //url getter
    public function getUrl(){
        return $this->url;
    }
    //employee getter
    public function getEmployees(){
        return $this->employees;
    }
    //function that calculates the total salary
    public function calculateTotalSalary(){
        //set the variable that we will use in the loop
        $totalSalary = 0;
        $emps = $this->getEmployees();
        //loop that gets and adds each employee's salary to eachother to reach the total amount
        foreach ($emps as $emp) {
            $totalSalary += $emp->getSalary();

        }
        //print the total salary
        return $totalSalary;
    }
}