<?php 
include("app/app.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {

    define("LAYOUT_TITLE", "Page de connexion");
    include("app/views//users/loginView.php");

} else {

    include("app/model/usersModel.php");
    $user = userLogin($_POST["user_login"], $_POST["user_pass"]);
    var_dump($user);

    if($user) {
        if ($user["user_key"] == "") {
            $_SESSION["userFO"] = $user;
            $_SESSION["userFO"]["token"] = md5(uniqid());
            flash_create("Vous êtes connecté", "success");
            header("Location: index.php");
            exit;
            } else {
                flash_create("Veuillez activer votre compte dans vos mails", "danger");
                header("Location: ?module=users&action=login");
                exit;
            }
        
    } else {
        flash_create("login/mot de passe incorrectes ! ","danger");
        header("Location:?module=users&action=login");
        exit;
    }
}










