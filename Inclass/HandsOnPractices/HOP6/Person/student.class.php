<?php
/*
 * Author: Louie Zhu
 * Date: 03/15/2024
 * Name: student.class.php
 * Description: The Student models a student. The class inherits from the Person class.
 */
require_once('person.class.php');

class Student extends Person
{
    private string $major;
    private float $gpa;

    public function __construct(string $name, string $gender, string $major, float $gpa)
    {
        parent::__construct($name, $gender);
        $this->major = ($major);
        $this->gpa = ($gpa);
    }


    // returns the major of a student
    public function getMajor(): string
    {
        return $this->major;
    }

    // returns the GPA of a student
    public function getGPA(): float
    {
        return $this->gpa;
    }

    // sets the major of a student
    public function setMajor($major): Student
    {
        $this->major = $major;
        return $this;
    }

    // sets the GPA of a student
    public function setGPA($gpa): Student
    {
        $this->gpa = $gpa;
        return $this;
    }

    public function toString(): null
    {
        parent::toString();
        echo "Major: " . $this->getMajor() . "<br>";
        printf("GPA: %.1f <br>", $this->getGpa());
        return null;
    }


} //end of class
