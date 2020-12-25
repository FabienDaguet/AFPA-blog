<?php

function userLogin($login, $password) {
    global $pdo;
    try {
        $query = "SELECT *
                    FROM blog_users
                    WHERE user_login = :login
                        AND user_pass= :password";
        //echo $query;
        $req = $pdo->prepare($query); 
        $req->bindValue(":login", $login, PDO::PARAM_STR);
        $req->bindValue(":password", md5(SALT . $password . SALT), PDO::PARAM_STR);
        $req->execute();

        $req->setFetchMode(PDO::FETCH_ASSOC);
        $post = $req->fetch(); 
        $req->closeCursor();
        return $post;
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
    }
}

function userInsert($user, $key)
{
    global $pdo;
    try {
        $query = "INSERT INTO blog_users
        (user_login, user_pass, user_email, display_name, user_descr, user_admin, user_key)
    VALUES
        (:user_login, :user_pass, :user_email, :display_name, :user_descr, :user_admin, :user_key)";

        $req = $pdo->prepare($query);
        $req->bindValue(':user_admin', 0, PDO::PARAM_INT);
        $req->bindValue(':user_login', $user["user_login"], PDO::PARAM_STR);
        $req->bindValue(':user_pass', md5(SALT . $user["user_pass"] . SALT), PDO::PARAM_STR);
        $req->bindValue(':user_email', $user["user_email"], PDO::PARAM_STR);
        $req->bindValue(':display_name', $user["display_name"], PDO::PARAM_STR);
        $req->bindValue(':user_descr', $user["user_descr"], PDO::PARAM_STR);
        $req->bindValue(':user_key', $key,  PDO::PARAM_STR);
        $req->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function userActivate($key) {
    global $pdo;
    try {
        $query = "UPDATE blog_users
                    SET  
                        user_key = ''
                    where user_key = :user_key";
        //die($query);
        $req = $pdo->prepare($query);
        $req->bindValue(":user_key", $key, PDO::PARAM_STR);
        $req->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function userById($id) {
    global $pdo;
    try {
        $query = "SELECT *
                    FROM blog_users
                    WHERE ID = :id";
                        
        //echo $query;
        $req = $pdo->prepare($query);
        $req->bindValue("id",$id , PDO::PARAM_INT);
        $req->execute();

        $req->setFetchMode(PDO::FETCH_ASSOC);
        $user = $req->fetch(); 
        $req->closeCursor();
        return $user;
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
    }
}