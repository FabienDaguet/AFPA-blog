<?php
        //var_dump($_POST); exit;
        include("app/app.php");
        include("app/protect.php");

        

       if (isset($_POST["id"])) {
             include("app/model/usersModel.php");
            if(userUpdate($_POST)) {
                if ($_POST["id"] == $_SESSION["userBO"]["ID"]) {
                    $_SESSION["userBO"]["user_login"] = $_POST["user_login"];
                    $_SESSION["userBO"]["display_name"] = $_POST["display_name"];
                    $_SESSION["userBO"]["user_pass"] = $_POST["user_pass"];
                    $_SESSION["userBO"]["user_email"] = $_POST["user_email"];
                    $_SESSION["userBO"]["user_descr"] = $_POST["user_descr"];
                }
                flash_create("Changement effectué ! ","success");
                header("Location:index.php");
            } else
                flash_create("Changement non effectué ! ","Danger");   
                header("Location:index.php");
       } else {
        die("Pas pour toi.");
    }
       
        