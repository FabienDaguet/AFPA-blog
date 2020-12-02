<?php


    include("app/app.php");

    include("app/model/postModel.php");
    if (isset($_GET["id"])) {
        postDelete($_GET["id"]);
        header("Location:articles.php");
    } else {
        die("Accès refusé");
    }
    

