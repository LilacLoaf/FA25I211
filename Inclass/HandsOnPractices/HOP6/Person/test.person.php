<?php
/*
 * Author: your name
 * Date: today's date
 * Name: test_person.phpp
 * Description: this client program tests the Person and Student classes.
 */

//convert a camel cased string to a underscored string
function camelCaseToUnderscore($str) {
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

spl_autoload_register(function($class_name){
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <meta name="author" content="Admin"/>

    <title>The Person class and its subclasses</title>
</head>

<body>

<?php

$g = new GradStudent("Kevin", "Male", "Informatics", 3.8, "Master");
echo '<h3> Graduate Student </h3>';
$g->toString();

$u = new UndergradStudent("Judy", "Female", "Informatics", 3.5, "Junior");
echo '<h3> Undergraduate Student </h3>';
$u->toString();

?>

</body>
</html>