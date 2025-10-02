<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/30/2025
 * File: undergrad_student.class.php
 * Description:
 */

class UndergradStudent extends Student
{
    private string $status;

    public function __construct(string $name, string $gender, string $major, float $gpa, string $status){
        parent::__construct($name, $gender, $major, $gpa);
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): UndergradStudent
    {
        $this->status = $status;
        return $this;
    }

    public function toString(): null{
        parent::toString();
        echo "Status: " . $this->getStatus() . "<br>";
        return null;
    }

}