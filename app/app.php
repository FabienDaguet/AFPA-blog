<?php

    session_start();

    include("config/config.inc.php");
    include("core/pdo.inc.php");
    include("core/flash.php");

    define("DEV", true);

    include("app/model/categoriesModel.php");
    $categories = allCategories();

