<?php
var_dump($_POST);
include("app/app.php");

include("app/model/usersModel.php");

if (addAdmin($_POST["user_admin"], $_POST["user_ID"])) {
    flash_create("Changement effectué ! ","success");
    header("Location:users.php");
} else {
    flash_create("Changement non effectué ! ","danger");
    header("Location:users.php");

}
