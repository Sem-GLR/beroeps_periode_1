<?php
require 'configs/conn.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$query = "SELECT * FROM recipe";
$stmt = $conn->prepare($query);
$stmt->execute();

$resultaten = $stmt->fetchAll();

$aantalRijen = count($resultaten);

//voor tags onder recept
$query_tag = "SELECT * FROM tag 
              INNER JOIN recipe_tag ON recipe_tag.tag_ID = tag.ID
              INNER JOIN recipe ON recipe.ID = recipe_tag.recipe_ID";
$stmt_tag = $conn->prepare($query_tag);
$stmt_tag->execute();

$resultaten_tag = $stmt_tag->fetchAll();

$aantalRijen_tag = count($resultaten_tag);

include "views/overzicht_view.php";
