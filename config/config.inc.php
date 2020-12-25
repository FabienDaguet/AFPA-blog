<?php

if ($_SERVER["HTTP_HOST"] == "localhost") {

    //Environnement DEV (localhost)
    
    define("DB_HOST", "localhost");
    define("DB_NAME", "blog");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_CHARSET", "utf8");

    ini_set("display_errors", "1");
    define("DEV", true);

    define("DEFAULT_MODULE" , "posts");
    define("DEFAULT_ACTION" , "index");
    define("ABSOLUTE", "http://localhost/exercices/blog1%20copy/");

} else {

    //Environnement de PROD (serveur)
    
    define("DB_HOST", "");
    define("DB_NAME", "");
    define("DB_USER", "");
    define("DB_PASSWORD", "");
    define("DB_CHARSET", "");

    ini_set("display_errors", "0");
    define("DEV", false);

    define("DEFAULT_MODULE", "posts");
    define("DEFAULT_ACTION", "index");
    define("ABSOLUTE", "http://localhost/exercices/blog1%20copy/");

}

define("TRUNCATE", 300);

define("LAYOUT_TITLE_DEFAULT", "Blog");

define( 'SALT', 'P*C*:.[YTFQAQI=wURRK`jsORa(}_K@5F;4$c#`K;o:zofF5xOFZL?x<liAl4vhP' );


