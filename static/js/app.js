"use strict";

var liens = document.getElementsByClassName("suppr");

for (let lien of liens) {

    lien.addEventListener("click", function(event) {
        if(!confirm("Voulez-vou supprimer ?")) {
            event.preventDefault();
        }
    })
};

let eye = document.getElementById("eye");

eye.addEventListener("click", function() { 
    if(user_pass.type == "password"){
        user_pass.type = "text";
    } else {
        user_pass.type ="password";
    } 
});