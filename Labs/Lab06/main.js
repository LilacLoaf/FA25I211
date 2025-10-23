/* Author: jonathan nguyen
 * Date: 10/9/2025
 * Name: main.js
 * Description: this javascript file sends ajax request and handles server's responses.
 */

//create a XMLHttpRequest object
const xmlHttp = new XMLHttpRequest();

//handle keyup event fired in the radius and height text boxes
window.onload = function () {
    document.getElementById('width').addEventListener('keyup', calculate);
    document.getElementById('length').addEventListener('keyup', calculate);
    document.getElementById('height').addEventListener('keyup', calculate);
}

//gets called when a keyup event gets fired to handle client-side programming tasks.
function calculate() {
    //add your code below
    //define the variables so i dont need to type the entire thing out
    const width = document.getElementById('width').value;
    const length = document.getElementById('length').value;
    const height = document.getElementById('height').value;

    console.log(width, length, height);

      //  console.log(width, length, height);

    //check if the value is a number and not a negative number - im certain there's an easier way of doing this than 6 ORs
    if (isNaN(width) || isNaN(length) || isNaN(height) || width < 0 || length < 0 || height < 0) {
        //if any of these are true, clear out the base field
        document.getElementById('base').innerHTML = "";
        //if any of these are true, clear out the volume field
        document.getElementById('volume').innerHTML = "";
        //if any of these are true, clear out the lateral field
        document.getElementById('lateral').innerHTML = "";
        //if any of these are true, clear out the surface field
        document.getElementById('surface').innerHTML = "";
        return;
    }

    //set the url so we can use the get method
    const url = "pyramid_do.php?width=" + width + "&length=" + length + "&height=" + height

    //open the xmlhhttp and start the ajax code
xmlHttp.open("GET", url, true);

    //define what we will do with the ajax
xmlHttp.onload = function () {

    //parse the json response
    const output = JSON.parse(xmlHttp.responseText);
//update the html with the details we got from the json
    document.getElementById('base').innerHTML = output.Base;
    document.getElementById('volume').innerHTML = output.Volume;
    document.getElementById('lateral').innerHTML = output.Lateral;
    document.getElementById('surface').innerHTML = output.Surface;
}
//send the ajax request
xmlHttp.send();

}