<?php

    session_start();

    if(isset($_GET["token"]) && $_GET["token"] != $_SESSION["userFO"]["token"]) {
        die("Token invalide !");
    }

    
    include("core/coreModel.php");
    include("core/flash.php");
    include("core/tools.php");

    include("app/model/categoriesModel.php");
    $categories = allCategories();

    include_once("app/model/postModel.php");
    $lastestPosts = lastestPosts(3);

