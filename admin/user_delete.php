<?php


    include("app/app.php");

    include("app/model/usersModel.php");
    if (isset($_GET["id"])) {
        userDelete($_GET["id"]);
        flash_create("Utilisateur supprimé", "success");
        header("Location:users.php");
    } else {
        flash_create("Utilisateur non supprimé", "danger");
        die("Accès refusé");
    }
    

