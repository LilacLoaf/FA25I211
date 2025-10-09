<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/9/2025
 * File: medical_student.class.php
 * Description:
 */

class MedicalStudent extends GradStudent{
    private float $mcat;
    private static int $student_count = 0;

    public function __construct($name, $gender, $major, $gpa, $program, $mcat){
        parent::__construct($name, $gender, $major, $gpa, $program);
        $this->mcat = $mcat;
        self::$student_count++;
    }

    public function getMcat(): float
    {
        return $this->mcat;
    }

    public function setMcat(float $mcat): MedicalStudent
    {
        $this->mcat = $mcat;
        return $this;
    }

public static function getStudentCount(): int{
        return self::$student_count;
}

public function toString(): null {
        parent::toString();
        echo"<br>MCAT: " . $this->getMcat() . "</br>";
        return null;
}

}