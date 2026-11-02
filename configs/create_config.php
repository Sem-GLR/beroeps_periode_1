<?php
// Shorthand om nieuwe data te creeren binnen een specifieke tabel

// 'belangrijk'-en bewerken
// BELANGRIJK: er moet van tevoren al bekend zijn welke data er gemaakt wordt en in welk tabel ($table, $values)
// BELANGRIJK #2: $select en $table moeten van tevoren beveiligd worden.


$query_create = "INSERT INTO :table VALUES(:values)";

$stmt_create = $conn->prepare($query_create);
$stmt_create->execute([
    "table" => $table,
    "values" => $values
]);