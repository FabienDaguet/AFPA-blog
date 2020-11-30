<?php

include("app/app.php");

include("app/model/commentsModel.php");
$comments = allComments();
//var_dump($comments); exit;

define("LAYOUT_TITLE", "Modération des commentaires");

include("app/views/commentsView.php");