<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/2/2025
 * File: course_client.php
 * Description:
 */

use Lab01\Course;

require_once "course.class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 01 Course Class</title>

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

</head>
<body>
<?php
//Enter your PHP code here

// set prereq to default to none
$course1 = new Course("Information Infrastructure II", " 	INFO-I 211", "4", "The systems architecture of distributed applications. Advanced programming, including an introduction to the programming of graphical systems.", "INFO-I210");
$course2 = new Course(" 	Human-Computer Interaction", "INFO-I 300", "3", "The analysis of human factors and the design of computer application interfaces. A survey of current HCI designs with an eye toward what future technologies will allow. The course will emphasize learning HCI based on implementation and testing interfaces",);

?>

<!-- Page header -->
<h2 style="text-align:center">Course Details</h2>


<!-- create the table -->
<table style="margin-left: auto; margin-right: auto;">
    <tr>
        <th>Title</th>
        <td><?= $course1->getTitle(); ?></td>
        <td><?= $course2->getTitle(); ?></td>
    </tr>
    <tr>
        <th>Number</th>
        <td><?= $course1->getNumber(); ?></td>
        <td><?= $course2->getNumber(); ?></td>
    </tr>
    <tr>
        <th>Credits</th>
        <td><?= $course1->getCredits(); ?></td>
        <td><?= $course2->getCredits(); ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?= $course1->getDescription(); ?></td>
        <td><?= $course2->getDescription(); ?></td>
    </tr>
    <tr>
        <th>Prerequisite</th>
        <td><?= $course1->getPrerequisite(); ?></td>
        <td><?= $course2->getPrerequisite(); ?></td>
    </tr>
</table>
</body>
</html>