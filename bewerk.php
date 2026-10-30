<?php

require("config.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);

$ID = $_GET["ID"];

$query = "SELECT * FROM recepten WHERE ID = :ID";
$stmt = $conn->prepare($query);
$stmt->bindParam(":ID", $ID);
$stmt->execute();

$resultaten = $stmt->fetchAll();

include 'views/bewerk_view.php';
