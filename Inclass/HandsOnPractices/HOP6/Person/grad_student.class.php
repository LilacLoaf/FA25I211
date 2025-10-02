<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/30/2025
 * File: grad.student.class.php
 * Description:
 */


class GradStudent extends Student
{
    private string $program;

    public function __construct(string $name, string $gender, string $major, float $gpa, string $program)
    {
        parent::__construct($name, $gender, $major, $gpa);
        $this->program = $program;
    }

    public function getProgram(): string
    {
        return $this->program;
    }

    public function setProgram(string $program): GradStudent
    {
        $this->program = $program;
        return $this;
    }

    public function toString(): null
    {
        parent::toString();
        echo "Program: " . $this->getProgram() . "<br>";
        return null;
    }

}