<?php
    function allPosts() {
        global $pdo;
        try {
            $query = "SELECT post_title, post_date, display_name, cat_descr, cat_id, post_ID, post_img_url
                                FROM blog_posts, blog_users, blog_categories
                                WHERE post_author = blog_users.ID
                                    AND post_category= cat_id
                                ORDER BY post_date DESC";
                                
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $req->fetchAll();
            $req->closeCursor();
            return $posts; 
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
            }
    }

    function postById($id) {
        global $pdo;
        try {
            $query = "SELECT post_title, post_content, post_date, display_name, cat_descr, post_ID, post_img_url, cat_id, user_photo, user_descr, post_category
                                FROM blog_posts, blog_users, blog_categories 
                                WHERE post_author = blog_users.ID
                                    AND post_category= cat_id
                                    AND post_ID= " . $id;
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

    function postByClass($id) {
        global $pdo;
        try {
            $query = "SELECT post_title, LEFT(post_content, " . TRUNCATE . ") AS post_content, post_date, display_name, cat_descr, post_ID, post_img_url, cat_id
                                FROM blog_posts, blog_users, blog_categories
                                WHERE post_author = blog_users.ID
                                    AND post_category= cat_id 
                                    AND post_author = ID 
                                    AND post_category = " . $id . "
                                        ORDER BY post_date DESC";

            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $req->fetchAll(); 
            return $posts;
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
    }

    function addPost($post, $id_user) {
        global $pdo;
        if (isset($post["title"])) {

            try {
            $query = "INSERT INTO blog_posts
                        (post_author, post_title, post_category, post_content, post_img_url)
                        VALUES
                        (" . $id_user . ", '" . addslashes($post["title"]) . "', '" . addslashes($post["category"]) . "', '" . addslashes($post["content"]) . "', '" . $post["post_img_url"] . "')";
                    //die($query);
                    $req = $pdo->query($query);
                    return true;
                } catch (Exception $e) {
                    return false;
                }
            }
        }

        

    function postDelete($id) {
        global $pdo;
        try {
            $query = "DELETE 
                        FROM blog_posts 
                        WHERE post_ID = " . $id;
            //die($query);
            $req = $pdo->query($query);
            return true;
        } catch (Exception $e) {
            return false;
        } 
    }

    function postUpdate($post) {
        global $pdo;
        try {
            $query = "UPDATE blog_posts
                        SET  
                            post_title = :title,
                            post_category = :category,
                            post_content = :content
                        where post_ID = :id";
            //die($query);
            $req = $pdo->prepare($query);
            $req->bindValue(":title", $post["post_title"], PDO::PARAM_STR);
            $req->bindValue(":category", $post["post_category"], PDO::PARAM_STR);
            $req->bindValue(":content", $post["post_content"], PDO::PARAM_STR);
            $req->bindValue(":id", $post["id"], PDO::PARAM_INT);
            $req->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }