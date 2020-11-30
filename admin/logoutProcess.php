<?php

include("app/app.php");

unset($_SESSION["userBO"]);
flash_create("Vous êtes déconnecté !", "success");
header("Location:login.php");
