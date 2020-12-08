<?php
        //var_dump($_POST); exit;
        include("app/app.php");
        include("app/protect.php");


       if (isset($_POST["user_pass_old"])) {
            $_POST = sanitize($_POST);
            include("app/model/usersModel.php");


            if ($_POST["user_pass"] != $_POST["user_pass_new"]) {
                flash_create("Mots de passe différents !", 'danger');
                header("Location: userEdit.php?id=" . $_SESSION["userBO"]["ID"]);
                exit;
            }

            if(userPassUpdate($_POST, $_SESSION["userBO"]["ID"])) {
                if ($_POST["id"] == $_SESSION["userBO"]["ID"]) {
                    $_SESSION["userBO"]["user_pass"] = md5(SALT . $_POST["user_pass"] . SALT);  
                    flash_create("Changement effectué ! ","success");
                }else
                flash_create("Changement non effectué ! ","Danger");
                } 
                header("Location:users.php");
            } else {
            die("Pas pour toi.");
        }
       
        