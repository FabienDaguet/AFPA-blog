<?php

//var_dump($_POST);

include("app/app.php");

include("app/model/usersModel.php");
$user = userLogin($_POST["user_login"], $_POST["user_pass"]);
//var_dump($user);

if($user) {
    $_SESSION["userBO"] = $user;
    $_SESSION["userBO"]["token"] = md5(uniqid());
    //die(uniqid());
    header("Location:index.php");

} else {
    flash_create("login/mot de passe incorrectes ! ","danger");
    header("Location:login.php");
}