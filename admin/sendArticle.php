<?php

var_dump($_POST);

    include("app/app.php");
    include("app/protect.php");

    include("app/model/postModel.php");
    addPost($_POST);

    header("Location:articles.php");
   