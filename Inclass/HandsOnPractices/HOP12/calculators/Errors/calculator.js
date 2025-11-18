/* Author: Louie Zhu
 * Date: 03/10/2024
 * Name: calculator.php
 * Description: This contains the JavaScript code for the application.
 */

// stores the reference to the XMLHttpRequest object
let xmlHttp;

window.onload = function () {
    //create an XMLHttpRequest object
    if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    }
};

// perform math operations
function dothemath(operator) {
    let operand1 = document.getElementById('operand1').value;
    let operand2 = document.getElementById('operand2').value;
    operator = encodeURIComponent(trim(operator));

    // open an asynchronous request to the server. Send operands and operator in query string variables
    xmlHttp.open("GET", "calculator.php?operand1=" + operand1 + "&operand2=" + operand2 + "&operator=" + operator, true);

    // define the method to handle server responses
    xmlHttp.onload = function () {
        // extract the JSON received from the server
        let response = JSON.parse(xmlHttp.responseText);

        let result = response.result;
        let message = response.message;

        //display the result and message
        document.getElementById('result').innerHTML = result;
        document.getElementById('message').innerHTML = message;

    };

    // make the server request
    xmlHttp.send(null);
}

/* A home-made trim function that removes leading and
 * trailing whitespace characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}