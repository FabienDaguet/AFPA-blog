<?php


    include("app/app.php");

    include("app/model/commentsModel.php");
    if (isset($_GET["id"])) {
        commentDelete($_GET["id"]);
        header("Location:comments.php");
    } else {
        die("Accès refusé");
    }
    

