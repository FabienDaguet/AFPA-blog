<?php

function sanitize($tab) {
    foreach ($tab as $key => $value) {
        //var_dump($tab);
        $tab[$key] = htmlentities($value);
    }
    //var_dump($tab);
    return $tab;
}