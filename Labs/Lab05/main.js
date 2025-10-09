/* Author: your name
 * Date: today's date
 * Name: main.js
 * Description: this is the javascript file for handling client-side scripting.
 */

/******************************************************************************
 * Handle key press event.
 * This function makes asynchronous HTTP request using the XMLHttpRequest object.
 * It passes a name to population.php for processing.
 *****************************************************************************/
function handlekeyup(e) {
    //retrieve user input from the text box
    let name = trim(document.getElementById('name').value);
    if (name == "") {
        // error("Name Not Found");
        clear()
        return;
    }

    //add your code here to process ajax requests and handle server's responses

    //create the xml object
    let xmlHttp = new XMLHttpRequest();
//define the request
    xmlHttp.open("GET", "population.php?name=" + name, true);

    //what happens when the request goes through

    xmlHttp.onload = function () {
        //get the JSON response
        let result = JSON.parse(xmlHttp.responseText);

        //check for the error
        if (result.hasOwnProperty("error")) {
            error(result.error)
            //   document.getElementById("message").innerHTML = "Name Not Found";


            //if no error, display the JSON
        } else {
            error("")
            //  document.getElementById("message").innerHTML = "";
            display(result);
        }
    }

    //send the request - outside of the funtion
    xmlHttp.send();

}

/*
 * This function accepts a JSON object containing population information
 * and display it in an HTML table. This function get invoked by the handlekeyup function
 * when the country/region name is found in the database.
 * 
 */
function display(population) {
    //add your code here to retrieve data from an JSON object and then display them

    //get the div id where we will put the results into
    let displayResults = document.getElementById('population-results');


    //removes previous table so that changes can update
    displayResults.innerHTML = "";


    //fill in the top part with the name and code
    document.getElementById("country").innerHTML = population.metadata.name;
    document.getElementById("code").innerHTML = population.metadata.code

//fill the data into the divs provided using a loop
    for (let year in population) {
        if (year === "metadata") continue;

        //create the row div and apply the row class name for css styling
        let rowDiv = document.createElement("div");
        rowDiv.className = "row";

        // define the year data
        let yearData = population[year];
        //create a div to put the info into
        let yearDiv = document.createElement("div");
        //set the contents of the dif to the year (idk why it can just take "year")
        yearDiv.innerHTML = year;
        //append the year div to the row div so that it keeps the styling
        rowDiv.appendChild(yearDiv);
//set the contents of the div to the country population by name
        let countryDiv = document.createElement("div");
        countryDiv.innerHTML = yearData[population.metadata.name];
        rowDiv.appendChild(countryDiv);
//set the contents of the div to the world's population in that year - don't know where the world's population is
        let worldPopDiv = document.createElement("div");
        worldPopDiv.innerHTML = yearData[population.metadata.value];
        rowDiv.appendChild(worldPopDiv);
        //append everything into the population-results div as a new row
        displayResults.appendChild(rowDiv);


    }


}

/*
 * This function clears the population. The function is invoked by the handlekeyup function if
 * the country name a user has entered is not found in the database.
 */
function clear() {
    //add your code here to clear the population data

    // Clear country and code headers
    document.getElementById("country").innerHTML = "";
    document.getElementById("code").innerHTML = "";

    // Clear the population results table
    document.getElementById("population-results").innerHTML = "";
}

//This function displays an error message in the div block with the id of "message".
function error(message) {
    //add your code here to display an error message
    //changes the message id to display our message
    document.getElementById('message').innerHTML = message;
}

/*
* A home-made trim function that removes leading and
 * trailing whitespace characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

/*
* A home-made function that displays a number with commas as thousands separators
 */
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}