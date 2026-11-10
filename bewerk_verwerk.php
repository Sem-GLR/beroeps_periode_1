<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'configs/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //get alle values in de forms
    $ID = $_GET['ID'];
    $receptnaam = $_POST['receptnaam'];
    $kook_tijd = $_POST['kook_tijd'];
    $porties = $_POST['porties'];
    $ingredienten = $_POST['ingredienten'];
    $keukspul = $_POST['keukspul'];
    $uitleg = $_POST['uitleg'];

    //alle errors moeten leeg zijn
     $letterErr = $leegErr = "";

    //kijk of de input velden leeg zijn
    if (empty($titel)||empty($kook_tijd)||empty($ingredienten)||empty($porties)||empty($keukspul)||empty($uitleg)) {
        $leegErr = "*een of meerdere velden zijn leeg*";
    }

//    kijk of een value alleen letters heeft
    if (!preg_match("/^[a-zA-Z]*$/",$titel)){
        $letterErr = "*alleen letters*";
    }

    //    als er geen errors zijn dan updaten
    if (empty($leegErr) && empty($letterErr)) {

try {
    //  zet de values in  de tabel
    $query = "UPDATE recipe
    SET receptnaam = :receptnaam,
        kook_tijd = :kook_tijd,
        porties = :porties,
        ingredienten = :ingredienten,
        keukspul = :keukspul,
        uitleg = :uitleg,
        WHERE ID = :ID";

    $stmt = $conn->prepare($query);

    //zet values weer in
    $stmt->execute([
        'receptnaam' => $receptnaam,
        'kook_tijd' => $kook_tijd,
        'porties' => $porties,
        'ingredienten' => $ingredienten,
        'keukspul' => $keukspul,
        'uitleg' => $uitleg,
        'ID' => $ID
    ]);

    if ($stmt->rowCount()) {
        $resultaat = "$titel is toegevoegd";

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