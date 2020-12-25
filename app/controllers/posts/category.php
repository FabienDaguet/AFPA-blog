<?php 

    if (!is_numeric($_GET["id"])) {
        die ("Une erreur est survenue !");
    }
    include("app/app.php");
    
    include_once("app/model/postModel.php");
    $posts = postByClass($_GET["id"]);

    define("LAYOUT_TITLE", "Categorie: " . $posts[0]["cat_descr"]);

    include("app/views/posts/categoryView.php");
