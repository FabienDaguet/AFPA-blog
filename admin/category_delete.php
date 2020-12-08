<?php

if (isset($_GET["id"])) {
    include("app/app.php");

    include("app/model/categoriesModel.php");
    if(categoryDelete($_GET["id"])){
        flash_create("La catégorie a été supprimé !", "success");
        header("Location:" . $_SERVER["HTTP_REFERER"]);
    } else {
        flash_create("La catégorie a été supprimé !", "danger");
        header("Location:" . $_SERVER["HTTP_REFERER"]);
    }
} else {
    die("Accès refusé");
}

// A FAIRE DANS comment_delete.php
    

