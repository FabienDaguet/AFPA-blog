<?php

include("app/app.php");

include("app/model/categoriesModel.php"); 
if (categorieInsert($_POST["cat_descr"])) {
    header("Location:categories.php");
} else {
    flash_create("La catégorie n'a pas été ajoutée ! ","danger");
    header("Location:categories.php");

}
