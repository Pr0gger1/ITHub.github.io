"use strict"
//burger menu
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
if(iconMenu){
    iconMenu.addEventListener("click", function(e){
        document.body.classList.toggle('_locked');
        iconMenu.classList.toggle('_active-menu');
        menuBody.classList.toggle('_active-menu');
    });
}