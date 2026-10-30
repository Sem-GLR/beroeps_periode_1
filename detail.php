<?php
require 'config.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

//de link moet ID er in hebben
$ID = $_GET["ID"];

$query = "SELECT * FROM recipes 
          INNER JOIN instructies ON recipes.instructiesID = instructies.ID 
          INNER JOIN keukenspullen ON recipes.keukenspullenID = keukenspullen.ID 
          INNER JOIN ingredienten ON recipes.ingredientenID = ingredienten.ID
          INNER JOIN reviews ON recipes.reviewsID = reviews.ID
          INNER JOIN tags ON recipes.tagsID = tags.ID
          WHERE recipes.ID = $ID
          ";
$stmt = $conn->prepare($query);
$stmt->execute();



$resultaten = $stmt->fetchAll();

$aantalRijen = count($resultaten);

include "views/details_view.php";