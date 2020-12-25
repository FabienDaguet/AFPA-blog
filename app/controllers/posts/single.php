<?php
    if (!is_numeric($_GET["id"])) {
            die ("Une erreur est survenue !");
    }
    
    include("app/app.php");
    include_once("app/model/postModel.php");
    include("app/model/commentsModel.php");

    $post = postById($_GET["id"]);
    //var_dump($post);
    $comments = commentsByPost($_GET["id"]);
    //var_dump($comments);

    $tab = explode(" ", $post["post_date"]);
                                    //var_dump($tab);
                                    $date = explode("-", $tab[0]);
                                    //var_dump($date);

    define("LAYOUT_TITLE", strip_tags($post["post_title"]));

    include("app/views/posts/singlePostview.php");
