<?php

        include("app/app.php");
        include("app/protect.php");

        include("app/model/usersModel.php");
        $user = userById($_GET["id"]);
        //var_dump($user); exit;


        include("app/views/userEditView.php");