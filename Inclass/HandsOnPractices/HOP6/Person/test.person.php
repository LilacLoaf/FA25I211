<?php
/*
 * Author: your name
 * Date: today's date
 * Name: test_person.phpp
 * Description: this client program tests the Person and Student classes.
 */

//convert a camel cased string to a underscored string
function camelCaseToUnderscore($str)
{
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

spl_autoload_register(function ($class_name) {
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <meta name="author" content="Admin"/>

    <title>The Person class and its subclasses</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        div.row {
            display: flex;
            flex-direction: row;
            border-top: 1px solid #999;
            padding: 20px 60px;
        }

        div#left {
            width: 300px;
            font-weight: bold;
        }

        div#right {
            width: 300px;
        }
    </style>
</head>

<body>

<?php

$g1 = new GradStudent("Kevin", "Male", "Informatics", 3.8, "Master");
$g2 = new GradStudent("Mellisa", "Female", "Informatics", 3.2, "PH.D.");

$u1 = new UndergradStudent("Judy", "Female", "Informatics", 3.5, "Junior");
$u2 = new UndergradStudent("Kim", "Female", "Nursing", 2.8, "Junior");

$m1 = new MedicalStudent("Amy", "Female", "Family Medicine", 3.4, "M.D.", 11.0);
$m2 = new MedicalStudent("Tim", "Male", "Anesthesiology", 3.6, "M.D.", 10.8);

$students = [$g1, $g2, $u1, $u2, $m1, $m2];


//display the string representations of students
function printStudent(Student $student): void
{
    echo "<div class = 'row'>";
    echo "<div id = 'left'>",
    match (get_class($student)) {
        "GradStudent" => "Graduate Student",
        "UndergradStudent" => "Undergraduate Student",
        "MedicalStudent" => "Medical Student",
        "Student" => "Student",
        default => "Unknown Object",
    }, "</div>";

    echo "<div id = 'right'>", $student->toString(), "</div>";
    echo "</div>";
}

foreach ($students as $student) {
    printStudent($student);
}

?>

</body>
</html>