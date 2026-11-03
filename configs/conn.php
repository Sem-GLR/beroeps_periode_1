<?php
// Shorthand om poging om een verbinding te maken

try {
    $host = "localhost"; // 127.0.0.1
    $dbname = "userdata_foodfreaks";

    $username = "admin_foodfreaks";
    $password = "c0Git0ErG0SuMMm";
    $settings = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password, $settings);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

// Errorcode
catch (PDOException $e) {
    echo "connection err";
}
