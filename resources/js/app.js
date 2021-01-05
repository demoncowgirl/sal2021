require('./bootstrap');

function changeBackground() {
    var color = document.getElementById("color").value; // cached

    // The working function for changing background color.
    document.bgColor = color;

}

document.getElementById("submitColor").addEventListener("click", changeBackground, false);
