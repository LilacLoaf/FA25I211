<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/4/2025
 * File: HandsOn1_client.php
 * Description:
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOP1</title>
</head>
<body>
<?php
require_once("HandsOn1.class.php");
$banana1 = new banana(1.00, 1, 200);
$banana2 = new banana(1.00, 1, 200);

$banana1->setWeight(1.22);
$calories1 = $banana1->calculateCalories();
echo "Banana 1: Calories = $calories1 <br>";

$banana2->setWeight(2.32);
$calories2 = $banana2->calculateCalories();
echo "Banana 2: Calories = $calories2 <br>";
?>


</body>
</html>
