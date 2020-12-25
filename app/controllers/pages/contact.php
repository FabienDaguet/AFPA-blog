<?php

    include("app/app.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $css = array( "essai1.css",
                       "essaie2.css");

        $js = array("https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM","static/js/garden-map.js");     

         include("app/views/pages/contactView.php");
          
    } else {
        $nom_expediteur = $_POST["nom"];
        $email_expediteur = $_POST["mail"];
        $email_reply = $_POST["mail"];
        $message_text = $_POST["contenu"];
        $destinataire = "test1@mail.com";
        $sujet = $_POST["sujet"];
        $message_html = $_POST["contenu"];

        $frontiere = md5(uniqid(mt_rand()));

        $headers = 'From: "'.$nom_expediteur.'" <'.$email_expediteur.'>'."\n";
        $headers .= 'Return Path: <'.$email_reply.'>'."\n";
        $headers .= 'MIME-Version: 1.0'."\n";
        $headers .= 'Content-Type: multipart/mixed; boundary="'.$frontiere.'"';

        echo "<p><pre>".$headers."</pre></p>";

        $message = 'Multipart message in MINE Format'."\n\n";
        $message .= '--'.$frontiere."\n";
        $message .= 'Content-Type: text/plain; charset="utf-8"'."\n";
        $message .= 'Content-Transfer-Encoding: 8bit'."\n\n";  
        $message .= $message_html."\n\n";

        $message .= '--'.$frontiere."\n";
        $message .= 'Content-Type: text/html; charset="utf-8"'."\n";
        $message .= 'Content-Transfer-Encoding: 8bit'."\n\n";  
        $message .= $message_text."\n\n";

        $message .= '--'.$frontiere."\n";
        $message .= 'Content-Type: image/jpeg; name="image.JPG"'."\n";
        $message .= 'Content-Transfer-Encoding: base64'."\n";  
        $message .= 'Content-Disposition:attachement; filename="image.JPG"'."\n\n";  
        $message .= chunk_split(base64_encode(file_get_contents("image.JPG")))."\n\n";

        //echo "<p><pre>".$message."</pre></p>";

        if (mail($destinataire, $sujet, $message, $headers)) {
           flash_create("Mail envoyé", "success");
        } else {
           flash_create("Mail non envoyé", "danger");
        }      
        header("Location:index.php");          
    }
   