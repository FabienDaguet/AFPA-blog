<?php 
include("app/app.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {

    define("LAYOUT_TITLE", "Page de création de compte");
    include("app/views/users/registerView.php");

} else {

    if (isset($_POST["user_login"])) {

        $_POST = sanitize($_POST);

        $key = md5(uniqid(rand()));

        include("app/model/usersModel.php");
        if (userInsert($_POST, $key)) {
            $nom_expediteur = "Mon blog";
            $email_expediteur = "admin@monblog.com";
            $email_reply = "noreply@monblog.com";
            $message_text = "Merci de consulter ce mail sur un outil plus moderne";
            $destinataire = $_POST["user_email"];
            $sujet = "Inscription mon blog";
            $message_html = "<html>
                                <head>
                                    <title>Un titre</title>
                                </head>
                                <body>
                                    Merci pour votre inscription sur Monblog.com <br>
                                    Pour valider votre inscription merci de cliqué sur le lien suivant:
                                    <a href ='" . ABSOLUTE . "?module=users&action=activate&key=" . $key ."'>Valider mon compte </a>
                                </body>
                            </html>";

            $frontiere = md5(uniqid(mt_rand()));

            $headers = 'From: "'.$nom_expediteur.'" <'.$email_expediteur.'>'."\n";
            $headers .= 'Return Path: <'.$email_reply.'>'."\n";
            $headers .= 'MIME-Version: 1.0'."\n";
            $headers .= 'Content-Type: multipart/mixed; boundary="'.$frontiere.'"';

            


            $message = 'Multipart message in MINE Format'."\n\n";
            $message .= '--'.$frontiere."\n";
            $message .= 'Content-Type: text/plain; charset="utf-8"'."\n";
            $message .= 'Content-Transfer-Encoding: 8bit'."\n\n";  
            $message .= $message_text."\n\n";
    
            $message .= '--'.$frontiere."\n";
            $message .= 'Content-Type: text/html; charset="utf-8"'."\n";
            $message .= 'Content-Transfer-Encoding: 8bit'."\n\n";  
            $message .= $message_html."\n\n";
/*
            echo "<p><pre>".$headers."</pre></p>";
            echo "<p><pre>".$message."</pre></p>";
            exit;
*/
            if (mail($destinataire, $sujet, $message, $headers)) {
                flash_create("Inscription réussi, vérifiez vos mails", "success");
                header("Location: ?module=users&action=login");
                exit;
            } else {
                flash_create("Inscription réussi, mais mail non envoyé", "danger");
                header("Location: ?module=users&action=login");
                exit;
            } 
        } else {
            flash_create("Echec de création", "danger");
            header("Location: ?module=users&action=register");
            exit;
        }
    } else {
        die ("NON");
    }   
}    