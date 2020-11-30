<?php 
    include("app/app.php");

    include("app/model/postModel.php"); 
    $posts = allPosts();
    //var_dump($posts);

    define("LAYOUT_TITLE", "Bienvenue");
    
    include("app/views/indexView.php");
