<?php

function userLogin($login, $password) {
    global $pdo;
    try {
        $query = "SELECT *
                    FROM blog_users
                    WHERE user_login ='" . $login . "'
                        AND user_pass='" . $password . "'";
        //echo $query;
        $req = $pdo->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $post = $req->fetch(); 
        $req->closeCursor();
        return $post;
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
    }
}