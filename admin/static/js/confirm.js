"use strict";

var liens = document.getElementsByClassName("suppr");

for (let lien of liens) {

    lien.addEventListener("click", function(event) {
        if(!confirm("Voulez-vou supprimer ?")) {
            event.preventDefault();
        }
    })
};