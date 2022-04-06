var modal = document.getElementById("modalWin");
var btn = document.getElementById("modalBtn");
var overlay = document.getElementById("over");
var CloseButton = document.getElementById("close")

btn.onclick = function () {
    modal.style.visibility = "visible";
}

CloseButton.onclick = function () {
    modal.style.visibility = "hidden";
}

window.onclick = function(event) {
    if (event.target == overlay) {
        modal.style.visibility = "hidden";
    }
}