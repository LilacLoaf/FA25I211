<?php
/*
 * Author: Louie Zhu
 * Date: 03/15/2024
 * Name: person.class.php
 * Description: This class models a person. This is the parent class.
 */

class Person
{

    private string $name, $gender; //the name and gender of a Person object

    //the constructor initializes the name and gender of a Person object
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    //get the name of a person
    public function getName(): string
    {
        return $this->name;
    }

    //get the gender of a person
    public function getGender(): string
    {
        return $this->gender;
    }

    //set the name of a person
    public function setName($name): Person
    {
        $this->name = $name;
        return $this;
    }

    //set the gender of a person
    public function setGender($gender): Person
    {
        $this->gender = $gender;
        return $this;
    }

    public function toString(): null
    {
        echo "Name: " . $this->getName() . "<br>";
        echo "Gender: " . $this->getGender() . "<br>";
        return null;
    }


}//end of class