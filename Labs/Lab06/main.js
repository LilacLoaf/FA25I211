/* Author: your name
 * Date: today's date
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
}