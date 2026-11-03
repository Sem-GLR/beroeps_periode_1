<?php
// Shorthand om verschillende data uit te lezen, bijvoorbeeld voor de overzichtspagina

// BELANGRIJK: er moet van tevoren al bekend zijn welke data er geselecteerd wordt en waar ($select, $table, $where). $where is optioneel.
// BELANGRIJK #2: $select, $table en $where moeten van tevoren beveiligd worden.


$query_read = "SELECT :select FROM :table :where";

$stmt_read = $conn->prepare($query_read);

if (!isset($select) || !isset($table) ) {
    echo "data err";
}

else if (is_null($where) || is_empty($where) ) {
    $stmt_read->execute([
        "select" => $select,
        "table" => $table,
        "where" => ""
    ]);
}

else {
    $stmt_read->execute([
        "select" => $select,
        "table" => $table,
        "where" => $where
    ]);
}

$result_read = fetchAll($stmt_read);
$result_readCount = count($result_read);