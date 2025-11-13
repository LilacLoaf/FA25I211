<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP + AJAX + JSON Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Get User Info using AJAX + PHP + JSON</h2>

<button id="loadBtn">Load User Data</button>

<div id="result"></div>

<script>
    document.getElementById("loadBtn").addEventListener("click", function() {
        // Create an AJAX request
        const xhr = new XMLHttpRequest();

        // The PHP file that will return JSON data
        xhr.open("GET", "data.php", true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                // Parse JSON data
                const data = JSON.parse(xhr.responseText);

                // Display it
                let html = "<h3>User Information</h3>";
                html += "<p><strong>Name:</strong> " + data.name + "</p>";
                html += "<p><strong>Email:</strong> " + data.email + "</p>";
                html += "<p><strong>Age:</strong> " + data.age + "</p>";

                document.getElementById("result").innerHTML = html;
            } else {
                document.getElementById("result").innerText = "Error loading data.";
            }
        };

        xhr.onerror = function() {
            document.getElementById("result").innerText = "Request failed.";
        };

        // Send the request
        xhr.send();
    });
</script>
</body>
</html>
