<?php
// Werking om gebruiker in te loggen

session_start();

if ($_SERVER["REQUEST_METHOD"]) {
    // beveilingsmaatregel

    if ($_POST["token"] != $_SESSION["token"] || !isset($_POST["token"]) || !isset($_SESSION["token"]) || empty($_SESSION["token"]) || empty($_POST["token"]) ) {
        header("Location: ../err.php");
    }

    else {
        // Haalt ingevulde gebruikersnaam en wachtwoord op en filtreert ze
        $user = htmlentities(strip_tags(trim($_POST["user"])));
        $pass = sha1(htmlentities(strip_tags(trim($_POST["pass"]))));

        // Verbindt met de server en logt de gebruiker in
        require "conn.php";

        $select = "ID, user_name, pass_word";
        $table = "user";
        $where = "user_name = $user AND pass_word = $pass";

        foreach($result_read as $check_user) {
            if ($check_user["user_name"] == $user && $check_user["pass_word"] == $pass) {
                $_SESSION["user"] = $check_user["user_name"];
                $_SESSION["id"] = $check_user["ID"];
            }

            else {
                header("location: ../login.php?not_found=1");
            }
        }

        require "read_config.php";
    }
}