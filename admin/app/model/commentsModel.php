<?php

function allComments() {
    global $pdo;
    try {
        $query = "SELECT * FROM blog_comments, blog_users, blog_posts
                                    WHERE comment_author = ID
                                        AND comment_post_ID = post_ID
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

function commentDelete($id) {
    global $pdo;
    try {
        $query = "DELETE 
                    FROM blog_comments 
                    WHERE comment_ID = " . $id;
        //die($query);
        $req = $pdo->query($query);
        return true;
    } catch (Exception $e) {
        return false;
    } 
}