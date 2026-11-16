<?php
// Shorthand om nieuwe data te creeren binnen een specifieke tabel

// BELANGRIJK: er moet van tevoren al bekend zijn welke data er gemaakt wordt en in welk tabel ($table, $values)


$query_create = "INSERT INTO :table VALUES(:values)";

$stmt_create = $conn->prepare($query_create);
$stmt_create->execute([
    "table" => $table,
    "values" => $values
]);