/*
 * This script contains AJAX methods
 */
let numTitles = 0;  //total number of suggested movies titles
let activeTitle = -1;  //movie title currently being selected
let searchBoxObj, suggestionBoxObj, activeTitleObj;


//initial actions to take when the page load
window.onload = function () {
    //DOM objects
    searchBoxObj = document.getElementById('searchtextbox');
    suggestionBoxObj = document.getElementById('suggestionDiv');
	searchBoxObj.addEventListener('keyup', handleKeyUp);
};

window.onclick = function () {
    suggestionBoxObj.style.display = 'none';
};

//set and send XMLHttp request. The parameter is the search term
function suggest(query) {
    //if the search term is empty, clear the suggestion box.
if(query === ""){
    suggestionBoxObj.innerHTML = "";
    return;
}

	//create an XHR object - - -
	const xhr=new XMLHttpRequest();

    //open an asynchronous AJAX request - - -
    xhr.open("GET","search_movie.php?q=" + query, true);


    //handle server's responses - - -
    xhr.onload = function () {
let titles = JSON.parse(xhr.response);
displayTitles(titles);
    }

    //send the AJAX request - - -
    xhr.send(null);
}


/* This function populates the suggestion box with spans containing all the titles
 * The parameter of the function is a JSON object
 * */
function displayTitles(titles) {
    numTitles = titles.length;
    //console.log(numTitles);
    activeTitle = -1;
    if (numTitles === 0) {
        //hide all suggestions
        suggestionBoxObj.style.display = 'none';
        return false;
    }

    let divContent = "";
    //retrieve the titles from the JSON doc and create a new span for each title
    for (i = 0; i < titles.length; i++) {
        divContent += "<span id=s_" + i + " onclick='clickTitle(this)'>" + titles[i] + "</span>";
    }
    //display the spans in the div block
    suggestionBoxObj.innerHTML = divContent;
    suggestionBoxObj.style.display = 'block';
}

//This function handles keyup event. The funcion is called for every keystroke.
function handleKeyUp(e) {
    /* if the keystroke is not up arrow or down arrow key,
     * call the suggest function and pass the content of the search box
     */
    if (e.keyCode !== 38 && e.keyCode !== 40) {
        suggest(e.target.value);
        return;
    }

    if(activeTitle >= 0) {
        activeTitleObj.style.backgroundColor = "#FFF";
    }

    //if the up arrow key is pressed
    if (e.keyCode === 38) {
        activeTitle = (activeTitle > 0) ? activeTitle - 1 : numTitles - 1;
    }

    //if the down arrow key is pressed
    if (e.keyCode === 40) {
        activeTitle = (activeTitle < numTitles - 1) ? activeTitle + 1 : 0;
    }

    activeTitleObj = document.getElementById("s_" + activeTitle);
    activeTitleObj.style.backgroundColor = "#F5DEB3";
    searchBoxObj.value = activeTitleObj.innerHTML;
}

//when a title is clicked, fill the search box with the title and then hide the suggestion list
function clickTitle(title) {
    //display the title in the search box
    searchBoxObj.value = title.innerHTML;

    //hide all suggestions
    suggestionBoxObj.style.display = 'none';
}