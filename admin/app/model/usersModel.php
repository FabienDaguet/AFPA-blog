<?php

function allUsers() {
    global $pdo;
    try {
        $query = "SELECT display_name, user_email, user_photo, user_admin, ID
                    FROM blog_users";

        $req = $pdo->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $user = $req->fetchAll();
        $req->closeCursor();
        return $user; 
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
}

function userLogin($login, $password) {
    global $pdo;
    try {
        $query = "SELECT *
                    FROM blog_users
                    WHERE user_login ='" . $login . "'
                        AND user_pass='" . $password . "'
                        AND user_admin = 2";
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

function addAdmin($set, $id) {
    global $pdo;
    try {
        $query = "UPDATE blog_users
                    SET  user_admin = $set
                    where ID = $id";
        //die($query);
        $req = $pdo->query($query);
        return true;
    } catch (Exception $e) {
        return false;
    }
}