<?php

    session_start();

    if(isset($_GET["token"]) && $_GET["token"] != $_SESSION["userFO"]["token"]) {
        die("Token invalide !");
    }

    include("config/config.inc.php");
    include("core/pdo.inc.php");
    include("core/flash.php");
    include("core/tools.php");

    include("app/model/categoriesModel.php");
    $categories = allCategories();

