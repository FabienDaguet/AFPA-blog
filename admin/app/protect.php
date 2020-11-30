<?php

if (!isset($_SESSION["userBO"])) {
    header("Location:login.php");
}
