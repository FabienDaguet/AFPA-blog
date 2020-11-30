<?php

include("app/app.php");

include("app/model/usersModel.php");
$user = userLogin($_POST["user_login"], $_POST["user_pass"]);
var_dump($user);

if($user) {
    $_SESSION["userFO"] = $user;
    header("Location:" . $_POST["referer"]);
} else {
    flash_create("login/mot de passe incorrectes ! ","danger");
    header("Location:login.php");
}