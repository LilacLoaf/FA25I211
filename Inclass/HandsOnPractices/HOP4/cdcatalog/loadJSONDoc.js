/* 
 * The function defined in this file loads an external JSON file
 * and returns the JSON object defined in the file.
 */

function loadJSON(file) {
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", file, false);
    xmlHttp.send();

    return xmlHttp.responseText;
}