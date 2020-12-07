<?php 

    include("app/app.php");
    include("app/protect.php");

    include("app/model/postModel.php");
    include("app/model/categoriesModel.php");
    $post = postByID($_GET["id"]);
    $categories = allCategories();
    
    

    define("LAYOUT_TITLE", "Modération des articles");
    
    include("app/views/articlesUpdateView.php");
   