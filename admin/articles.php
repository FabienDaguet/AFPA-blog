<?php 

    include("app/app.php");
    include("app/protect.php");

    include("app/model/postModel.php");
    $posts=allPosts();
    

    define("LAYOUT_TITLE", "Modération des articles");
    
    include("app/views/articlesView.php");
   