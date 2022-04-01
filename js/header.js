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

//move search form
const parentOriginal = document.querySelector('.menu__form-li');
const targetParent = document.querySelector('.header__container');
const searchForm = document.querySelector('.search-form');
window.addEventListener("DOMContentLoaded", moveForm)
window.addEventListener('resize', moveForm);
function moveForm(event){
    const viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(viewportWidth <= 910 && viewportWidth >= 428){
        // if(!searchForm.classList.contains('first-move')){
        //     targetParent.insertBefore(searchForm, targetParent.children[1]);
        //     searchForm.classList.add('first-move');
        // }
        targetParent.insertBefore(searchForm, targetParent.children[1]);
    }
    else if(viewportWidth < 428){
        // if(!searchForm.classList.contains('second-move')){
        //     parentOriginal.insertBefore(searchForm, parentOriginal.children[0]);
        //     searchForm.classList.add('second-move');
        // }
        parentOriginal.insertBefore(searchForm, parentOriginal.children[0]);
    }
    else {
        parentOriginal.insertBefore(searchForm, parentOriginal.children[0]);
    }
}

//highlight nav link
const navLinksArray = document.getElementsByClassName('menu__link');
window.addEventListener("DOMContentLoaded", highlightLink);
function highlightLink(){
    const body = document.querySelector('body');
    let bodyData = body.dataset.page;
    for (let i = 0; i < navLinksArray.length; i++) {    
        if (navLinksArray[i].dataset.page == bodyData){
            navLinksArray[i].classList.add('active');
        }
    }
}
