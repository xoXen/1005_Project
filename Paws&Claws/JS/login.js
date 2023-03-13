var logModal = document.getElementById("loginModal");
var regModal = document.getElementById("regModal");

$(document).ready( function() {
    // When the user clicks anywhere outside of the modal, close it
//    windowClose();
});

function windowClose() {
    //assign event listen on img popups
    document.body.addEventListener('click', closeBtn, true); 
};

function openRegBtn () {
   setBlock(regModal);
   setNone(logModal);
};

function openBtn () {
    setBlock(logModal);
    setNone(regModal);
};

function closeBtn () {
    logModal.style.display = "none";
    regModal.style.display = "none";
};

function setBlock (e) {
    e.style.display = "block";
};

function setNone (e) {
    e.style.display = "none";
};