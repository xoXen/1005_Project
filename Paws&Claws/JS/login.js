var logModal = document.getElementById("loginModal");
var regModal = document.getElementById("regModal");

$(document).ready( function() {
    // When the user clicks anywhere outside of the modal, close it
//    windowClose();
//      document.addEventListener("DOMContentLoaded", function() {
//        logout();
//      });
    
    
});

function windowClose() {
    //assign event listen on img popups
    document.body.addEventListener('click', closeBtn, true); 
};

function logoutBtn() {
    var logoutBtn = document.getElementById("logoutBtn");
    // Send AJAX request to destroy_session.php
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //display the contents of destroySessions.php before redirecting
            document.documentElement.innerHTML = this.responseText;
            //Redirect user to login page after session is destroyed
            setTimeout(function() {
                window.location.href = "index.php";
            }, 5000);
        }
    };
    xmlhttp.open("GET", "PHP/destroySessions.php", true);
    xmlhttp.send();
}

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