<?php 
    include("app/app.php");
    include("app/protect.php");

   

    include("app/model/postModel.php"); 
    $posts = allPosts();
    //var_dump($posts);

    include("app/model/categoriesModel.php"); 
    $categories = allCategories();
    
    include("app/views/categoriesView.php");
