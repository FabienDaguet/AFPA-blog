<?php 

    include("app/app.php");
    include("app/protect.php");

    include("app/model/categoriesModel.php");
    $categories=allCategories();
    

    define("LAYOUT_TITLE", "Publier un  articles");
    
    include("app/views/addArticleView.php");
   