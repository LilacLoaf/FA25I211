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
const width = document.getElementById('width').value;
const length = document.getElementById('length').value;
const height = document.getElementById('height').value;

if (isNaN(width) || isNaN(length) || isNaN(height) || width < 0 || length < 0 || height < 0 ) {
    document.getElementById('base').value = '';
    document.getElementById('volume').value = '';
    document.getElementById('lateral').value = '';
    document.getElementById('surface').value = '';
} else {
    xmlHttp.open("GET", )
}


}