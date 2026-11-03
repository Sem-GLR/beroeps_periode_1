<?php
require 'configs/conn.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

//de link moet ID er in hebben
$ID = $_GET["ID"];

$query = "SELECT * FROM recipe 
          INNER JOIN instructie ON recipe.instructie_ID = instructie.ID 
          INNER JOIN keukspul ON recipe.keukspul_ID = keukspul.ID 
          INNER JOIN ingredient ON recipe.ingredient_ID = ingredient.ID
          INNER JOIN review ON recipe.review_ID = review.ID
          INNER JOIN tag ON recipe.tag_ID = tag.ID
          WHERE recipe.ID = $ID
          ";
$stmt = $conn->prepare($query);
$stmt->execute();



$resultaten = $stmt->fetchAll();

$aantalRijen = count($resultaten);

//include "views/details_view.php";