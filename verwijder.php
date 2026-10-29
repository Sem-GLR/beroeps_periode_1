<?php

require 'config.php';

//we moeten code maken die kijkt of een account het recept heeft gemaakt dan kunnen anderen niet alles verwijderen

//pak ID uit de Link
$ID = $_GET['ID'];

try {
    $query = "DELETE FROM table_naam (recepten) WHERE ID = :ID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

    if ($stmt->rowCount()) {
        $resultaat = "het is verwijdert";
    } else {
        $resultaat = "het is niet verwijderd";
    }
    include "views/verwijder_success_view.php";
} catch (PDOException $e) {
    $resultaat = $e->getMessage();
}
