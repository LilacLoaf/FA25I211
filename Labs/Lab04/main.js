/*
/ Author: your name
/ Date: today's date
/ File: main.js
/ Description: This file contains javascript code that displays a list of countries of a selected continent.
/*

/* Handle window onload event. It creates a selection list of seven continents.
*/
window.onload = function () {
    // load continents from an external json file
    let continents = JSON.parse(loadJSON("continents.json"));

    //create the drop down list for the continents
    let _html_select = "<option selected='selected' disabled='disabled'>Select a Continent </option>";
    for (let continent in continents) {
        _html_select += "<option value='" + continent + "'>" + continents[continent] + "</option>";
    }
    document.getElementById("continents").innerHTML = _html_select;


    //load countries data from an external json file.
    let countries = JSON.parse(loadJSON("countries.json"));

    //handle change event of the drop down list and call the display method.
    document.getElementById("continents").onchange = function () {
        let choice = document.getElementById("continents").value;
        display(countries, choice);
    };
}

/* This function takes a json object of countries and a continent as the parameters. 
*  It filters the json document with a continent then appends a row to
*  the div block for each country.
*/
function display(countries, continent) {
    //define the div to use later
    let table = document.getElementById("countries");
    //clear the div whenever the function is run so that nothing prints over itself
    table.innerHTML = "";
//create a loop that goes through all of the data in the countries.json
    for (let country in countries) {
        //if the country's continent is the same as the continent defined above, run the function
        if (countries[country].continent === continent) {
            //take the data from the country
            let data = countries[country];

            //define a row to print following the stuff in the index
            //define the class as a row but not as the header
            let row = `
<div class = "countries row">
                <div>${country}</div>
                <div>${data.capital}</div>
                <div>${data.currency}</div>
                <div>${data.languages}</div>
                <div>${data.phone}</div>
</div>            
`;
            //print the row - inside the loop so it prints every row for each country
            table.innerHTML += row;
        }

    }
}
