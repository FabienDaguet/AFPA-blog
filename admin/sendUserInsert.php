<?php

var_dump($_POST);

    include("app/app.php");
    include("app/protect.php");

    include("app/model/usersModel.php");
    if (userinsert($_POST)) {
        flash_create("utilisateur ajouté", "success");
    } else {
        flash_create("L'utilisateur n'a pas été ajouté", "Danger");
    }

    header("Location:users.php");
   