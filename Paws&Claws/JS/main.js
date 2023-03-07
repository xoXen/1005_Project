/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
$(document).ready( function() {

    activateMenu();
    assignEventListenerToImg();
    assignEventListenerToClick();
    
});

//assign event listener on imgs
function assignEventListenerToImg() {
    //get img element class name
    const img = document.getElementsByClassName("img-thumbnail");

    for (let i=0; i<img.length; i++) {
        img[i].addEventListener("click", createPopUp);
    }
}

//create img popup 
function createPopUp(e) {
    //create span element for img popup
    const imgPopup = document.createElement("span");

    //set class attribute for span element created
    imgPopup.setAttribute("class","img-popup");

    //get source attribute with value "small" and replace it with "large"
    const imgSrc = e.target.src.replace("small","large");

    //modify inner html of span element to insert img 
    imgPopup.innerHTML = "<img src= " + imgSrc + " alt= " + e.target.alt + " />";

    //insert span element popup after the img
     e.target.parentNode.insertAdjacentElement("afterend", imgPopup);
}

// removing element when clicked on anywhere on the page    
function assignEventListenerToClick() {
    //assign event listen on img popups
    document.body.addEventListener('click', removePopUp, true); 
}
function removePopUp() {
    $(".img-popup").remove();
}

//toggle nav menu items status (active/inactive)
function activateMenu() {
    
    //gets url of current page
    var currentPageURL = location.href;
    
    $(".navbar-nav a").each(function() {
       var targetURL = $(this).prop("href");
       if (targetURL === currentPageURL) {
           $("nav a").parents("li, ul").removeClass("active");
           $(this).parent("li").addClass("active");
           return false;
       }
    });
}