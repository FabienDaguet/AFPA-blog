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
        /*$query = "SELECT *
                    FROM blog_users
                    WHERE user_login =" . $pdo->quote($login, PDO::PARAM_STR) . "
                        AND user_pass=" . $pdo->quote($password, PDO::PARAM_STR) . "
                        AND user_admin = 2";
        //echo $query;
        $req = $pdo->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $post = $req->fetch(); 
        $req->closeCursor(); */
        $query = "SELECT *
                    FROM blog_users
                    WHERE user_login = :login
                        AND user_pass= :password
                        AND user_admin = 2";
        //echo $query;
        $req = $pdo->prepare($query);
        $req->bindValue(":login", $login, PDO::PARAM_STR);
        $req->bindValue(":password", $password, PDO::PARAM_STR);
        $req->execute();
        
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $user = $req->fetch(); 
        $req->closeCursor();
        return $user;
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
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

function userUpdate($user) {
    global $pdo;
    try {
        $query = "UPDATE blog_users
                    SET  
                        user_login = :login,
                        display_name = :name,
                        user_email = :email,
                        user_descr = :descr
                    where ID = :id";
        //die($query);
        $req = $pdo->prepare($query);
        $req->bindValue(":login", $user["user_login"], PDO::PARAM_STR);
        $req->bindValue(":name", $user["display_name"], PDO::PARAM_STR);
        //$req->bindValue(":pass", $user["user_pass"], PDO::PARAM_STR);
        $req->bindValue(":email", $user["user_email"], PDO::PARAM_STR);
        $req->bindValue(":descr", $user["user_descr"], PDO::PARAM_STR);
        $req->bindValue(":id", $user["id"], PDO::PARAM_INT);
        $req->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function userPassUpdate($user, $id) {
    global $pdo;
    try {
        $query = "UPDATE blog_users
                    SET  user_pass = :user_pass
                    where ID = :id
                    AND user_pass =:user_pass_old";
        //die($query);
        $req = $pdo->prepare($query);
        $req->bindValue(":user_pass", md5(SALT . $user["user_pass"] . SALT), PDO::PARAM_STR);
        $req->bindValue(":user_pass_old", md5(SALT . $user["user_pass_old"] . SALT), PDO::PARAM_STR);
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}