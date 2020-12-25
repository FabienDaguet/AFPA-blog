<?php

if ($_SERVER["HTTP_HOST"] == "localhost") {

    //Environnement DEV (localhost)
    ini_set("display_errors", "1");
    define("DB_HOST", "localhost");
    define("DB_NAME", "blog");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_CHARSET", "utf8");
    define("DEV", true);

} else {

    //Environnement de PROD (serveur)
    ini_set("display_errors", "0");
    define("DB_HOST", "");
    define("DB_NAME", "");
    define("DB_USER", "");
    define("DB_PASSWORD", "");
    define("DB_CHARSET", "");
    define("DEV", false);
}

define("TRUNCATE", 300);

define("LAYOUT_TITLE_DEFAULT", "Blog");

define( 'SALT', 'P*C*:.[YTFQAQI=wURRK`jsORa(}_K@5F;4$c#`K;o:zofF5xOFZL?x<liAl4vhP' );
