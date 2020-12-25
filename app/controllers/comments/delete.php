<?php
if (isset($_GET["id"])) {

    include("app/app.php");

    include("app/model/commentsModel.php");
    if (commentDelete($_GET["id"], $_SESSION["userFO"]["ID"], $_SESSION["userFO"]["user_admin"])) {
        flash_create("Votre commentaire a été supprimé !", "success");
        header("Location:" . $_SERVER["HTTP_REFERER"]);
    } else {
        flash_create("Votre commentaire n'a pas été supprimé !", "danger");
        header("Location:" . $_SERVER["HTTP_REFERER"]);
    }
} else {
    die("Va mourir !");
}

