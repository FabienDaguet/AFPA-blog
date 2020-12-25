<?php
    function allPosts() {
        global $pdo;
        try {
            $query = "SELECT post_title, LEFT(post_content, " . TRUNCATE . ") AS post_content, post_date, display_name, cat_descr, cat_id, post_ID, post_img_url
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

    function lastestPosts($nb) {
        global $pdo;
        try {
            $query = "SELECT post_ID, post_title, post_date, post_img_url
                        FROM blog_posts
                        ORDER BY post_date DESC
                        LIMIT " . $nb;
                                
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $req->fetchAll();
            $req->closeCursor();
            return $posts; 
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
            }
    }

    function mostCommentedPosts($nb) {
        global $pdo;
        try {
            $query = "SELECT post_ID, post_title, post_date, display_name, cat_id, cat_descr, post_img_url, (SELECT count(*) AS nombre
                                FROM blog_comments
                                WHERE comment_post_ID = post_ID) AS nombre
                        FROM blog_posts, blog_users, blog_categories
                        WHERE post_author = ID
                            AND post_category = cat_id
                        ORDER BY nombre DESC
                        LIMIT " .$nb;
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
            $query = "SELECT post_title, post_content, post_date, display_name, cat_descr, post_ID, post_img_url, cat_id, user_photo, user_descr
                                FROM blog_posts, blog_users, blog_categories 
                                WHERE post_author = blog_users.ID
                                    AND post_category= cat_id
                                    AND post_ID= :id";
            //echo $query;
            $req = $pdo->prepare($query);
            $req->execute(array("id"=> $_GET["id"]));
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
                                
            /*
            while($posts = $req->fetch()) {
                var_dump($posts);
            }
            */
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $req->fetchAll(); 
            return $posts;
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
    }