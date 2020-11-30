<?php

function commentsByPost($idPost) {
    global $pdo;
    try {
        $query = "SELECT * FROM blog_comments, blog_users
                                    WHERE comment_author = ID
                                        AND comment_post_ID = " . $idPost . " 
                                        ORDER BY comment_date DESC";
                                    
                //echo $query;
                $req = $pdo->query($query);
                $req->setFetchMode(PDO::FETCH_ASSOC);
                $comments = $req->fetchALL(); 
                $req->closeCursor();
                return $comments;
    } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
}

function commentInsert($comment, $userID) {
    global $pdo;
    try {
        $query = "INSERT INTO blog_comments
                    (comment_post_ID, comment_author, comment_content)
                    VALUES
                    (" . $comment["comment_post_ID"] . "," . $userID . ",'" . addslashes($comment["comment_content"]) . "')";
        //die($query);
        $req = $pdo->query($query);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function commentDelete($id, $userID) {
    global $pdo;
    try {
        $query = "DELETE 
                    FROM blog_comments 
                    WHERE comment_ID = " . $id ."
                        AND comment_author= " . $userID;
        //die($query);
        $req = $pdo->query($query);
        return true;
    } catch (Exception $e) {
        return false;
    } 
}