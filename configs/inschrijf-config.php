<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    /* if (!empty($_SESSION["user"]) || isset($_SESSION["user"])) {
        header("location: ../login.php");
    }

    else {
    */



    if (empty($_POST['user']) || !isset($_POST['user']) || empty($_POST['email']) || !isset($_POST['email']) || empty($_POST['pass']) || !isset($_POST['pass']) ) {
        // Errorpagina
    }

    else {
        $user = htmlentities(strip_tags(trim($_POST['user'])));
        $pass = htmlentities(strip_tags(trim($_POST['pass'])));
        $e_mail = htmlentities(strip_tags(trim($_POST['email'])));

        if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../err.php");
        }


        $table = 'user(ID, user_name, pass_word, e_mail, admin)';
        $values = 'NULL, $user, $pass, $e_mail, 0';
        require "create_config.php";

    }
}