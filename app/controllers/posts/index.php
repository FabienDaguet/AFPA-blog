<?php 
    include("app/app.php");

    include_once("app/model/postModel.php"); 
    $posts = allPosts();
    $mostCommentedPosts = mostCommentedPosts(3);
    //var_dump($mostCommentedPosts); exit;

    define("LAYOUT_TITLE", "Bienvenue");
    
    include("app/views/posts/indexView.php");
    
