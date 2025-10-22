<?php
/*
 * Author: your name
 * Date: today's date
 * Name: test_interface.php
 * Description: a client program that tests all classes and interfaces in the Nameable class hierarchy.
 */

require('utilities.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Test the Nameable Interface</title>
</head>
<body>

<?php
//create two Dog instances
$d1 = new Dog("Samantha", "Austrlian Shepherd");
$d2 = new Dog("Maxwell", "German Shorthaired");

$c1 = new Car("Betty", "Ferrari");
$c2 = new Car("Max", "Porsche");

//print information about the two dogs
$d1->toString();
echo "<br /><br />";
$d2->toString();
echo "<br /><br />";
$c1->toString();
echo "<br /><br />";
$c2->toString();

?>
</body>
</html>
