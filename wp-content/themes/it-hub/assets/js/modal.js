const modal = document.getElementById("modalWin");

const btn_li = document.getElementsByClassName("modalBtn")[0];
const btn = btn_li.getElementsByTagName("a")[0];

const overlay = document.getElementById("over");
const CloseButton = document.getElementById("close");

btn.onclick = function () {
    modal.style.visibility = "visible"; // открытие модального окна по клике на ссылку

}
CloseButton.onclick = function () {
    modal.style.visibility = "hidden";
}

window.onclick = function(event) {
    if (event.target === overlay) {
        modal.style.visibility = "hidden";
    }
}
