<?php

var_dump($_POST);

include("app/app.php");
include("app/protect.php");

include("app/model/usersModel.php");
$users = allUsers();
//var_dump($comments); exit;

define("LAYOUT_TITLE", "Modération des utilisateurs");

include("app/views/usersView.php");