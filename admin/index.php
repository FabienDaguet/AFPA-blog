<?php 

    include("app/app.php");

    if (!isset($_SESSION["userBO"])) {
        header("Location:login.php");
        exit;
    }

    include("app/model/postModel.php");
    $posts=allPosts();
    

    define("LAYOUT_TITLE", "Bienvenue");
    
    include("app/views/indexView.php");
   