<?php
require 'configs/conn.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$current_recept_id = $rij["ID"];

$query_tag = "SELECT * FROM tag 
              INNER JOIN recipe_tag ON recipe_tag.tag_ID = tag.ID
              INNER JOIN recipe ON recipe.ID = recipe_tag.recipe_ID
              WHERE recipe.ID = :current_recept_id";

$stmt_tag = $conn->prepare($query_tag);
$stmt_tag->bindParam(':current_recept_id', $current_recept_id);
$stmt_tag->execute();

$resultaten_tag = $stmt_tag->fetchAll();

$aantalRijen_tag = count($resultaten_tag);

if ($aantalRijen_tag > 0){ ?>
<!--   voor elk recept zet het de html/php code hierbinnen-->
<?php foreach ($resultaten_tag as $rij) { ?>
<div style="background-color: #7ff8f1; width: fit-content; padding: 5px; border-radius: 5px; ">
    <?=$rij["tag"] ?></div>

<?php }} ?>

