<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //get alle values in de form
    $ID = $_GET['ID'];
    $naam = $_POST['naam'];

    //alle errors moeten leeg zijn
     $letterErr = $leegErr = "";

    //kijk of de input velden leeg zijn
    if (empty($naam)||empty($type)||empty($gebied)) {
        $leegErr = "*een of meerdere velden zijn leeg*";
    }

//    kijk of een value alleen letters heeft
    if (!preg_match("/^[a-zA-Z]*$/",$naam)){
        $letterErr = "*alleen letters*";
    }

    //    als er geen errors zijn dan updaten
    if (empty($leegErr) && empty($letterErr)) {

try {
    //  zet de values in  de tabel
    $query = "UPDATE recepten_tabel
    SET naam = :naam,
        naam = :naam,
        naam = :naam,
        WHERE ID = :ID";

    $stmt = $conn->prepare($query);

    //zet values weer in
    $stmt->execute([
        'naam' => $naam,

        'ID' => $ID
    ]);

    if ($stmt->rowCount()) {
        $resultaat = "$naam is toegevoegd";

        include 'index.php';
    } else {
        $resultaat = "er is iets fout gegaan bij toevoegen";
    }

} catch (PDOException $e) {
    echo "er ging iets fout" . $e->getMessage();
}

} else {
    include 'bewerk.php';
}

} else {
    echo "fout opgetreden";
}