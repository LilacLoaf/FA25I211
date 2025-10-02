<?php
/**
 * Author: your name
 * Date: today's date
 * File: index.php
 * Description: The HTML page displays population data.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Country, region, and world population</title>
    <link href="main.css" rel="stylesheet" type="text/css"/>

    <script src = "main.js"></script>
</head>
<body>
<h2 style="text-align: center">Country, Region, and World Population</h2>
<h3 style="text-align: center">An AJAX Application for Looking up population figures by country/region names</h3>

<div id="population-input">
    <strong>Enter country/region name (e.g. Zambia):</strong> <input onkeyup="handlekeyup()" id="name">
    <!-- the span tag for displaying the message -->
    <span id="message" style="color: red; margin-left: 5px"></span>

    <div class="row">
        <div style="width: 400px">
            <span style="font-weight: bold;">Country/Region: </span>
            <!-- the span tag for displaying the country/region name -->
            <span id="country"></span>
        </div>
        <div>
            <span style="font-weight: bold;">Code: </span>
            <!-- the span tag for displaying the country/region code -->
            <span id="code"></span>
        </div>
    </div>
</div>

<div class='row header'>
    <div>Year</div>
    <div>Country/Region Population</div>
    <div>World Population</div>
</div>

<!-- use the following div block to display population figures -->
<div id="population-results"></div>
</body>
</html>