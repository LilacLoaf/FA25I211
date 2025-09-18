<?php

//create the class
namespace Lab01;
class Course
{
    //lay out the details of the class
    private string $title, $number, $credits, $description, $prerequisite;

    //create constructor
    public function __construct(string $title, string $number, int $credits, string $description, string $prerequisite = "none")
    {
        $this->title = $title;
        $this->number = $number;
        $this->credits = $credits;
        $this->description = $description;
        $this->prerequisite = $prerequisite;
    }

    //get title 
    public function getTitle(): string
    {
        return $this->title;
    }

    //get number 
    public function getNumber(): string
    {
        return $this->number;
    }

    //get credits 
    public function getCredits(): string
    {
        return $this->credits;
    }

    //get description 
    public function getDescription(): string
    {
        return $this->description;
    }

    //get prerequisite 
    public function getPrerequisite(): string
    {
        return $this->prerequisite;
    }


}


?>