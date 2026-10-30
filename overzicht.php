<?php
require 'config.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);


$query = "SELECT * FROM recipes";
$stmt = $conn->prepare($query);
$stmt->execute();

$resultaten = $stmt->fetchAll();

$aantalRijen = count($resultaten);

include "views/overzichtpage_view.php";
