<?php

// Controleert of een POST-request was verstuurd
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Filtreert alle invoerwaardes
    $name = htmlentities(strip_tags(trim($_POST["name"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $hulp = htmlentities(strip_tags(trim($_POST["hulp"])));
    $bericht = htmlentities(strip_tags(trim($_POST["bericht"])));

    if (!empty($_POST["user_id"]) || isset($_POST["user_id"])) {
        $user_id = htmlentities(strip_tags(trim($_POST["user_id"])));
    }


    // Beveiligingsmaatregelen
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../err.php");
    }

    if (strlen($name) == 0 || strlen($email) == 0 || strlen($hulp) == 0 || strlen($bericht) == 0) {
        header("Location: ../err.php");
    }

    else {
        require "conn.php";

        $table = "contact(ID, hulp, bericht, name, user_ID)";
        $values = "NULL, $hulp, $bericht, $name, $user_id";
        require "create_config.php";

        $success = $stmt_create->rowCount();

        if ($success != 0) {
            header("Location: ../err.php");
        }

        else {
            header("Location: ../contact-form-success.php");
        }
    }


}

else {
    header("Location: ../err.php");
}