<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'configs/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //get alle values in de forms
    $recept_naam = $_POST['titel'];
    $kook_tijd = $_POST['kooktijd'];
    $porties = $_POST['porties'];


    //alle errors moeten leeg zijn
    $letterErr = $leegErr = "";

    //kijk of de input velden leeg zijn
    if (empty($recept_naam)||empty($kook_tijd)||empty($porties)) {
        $leegErr = "*een of meerdere velden zijn leeg*";
    }

//    kijk of een value alleen letters heeft
    if (!preg_match("/^[a-zA-Z]*$/",$recept_naam)){
        $letterErr = "*alleen letters*";
    }

    //    als er geen errors zijn dan updaten
    if (empty($leegErr) && empty($letterErr)) {

        try {
            //  zet de values in  de tabel
            $query = "INSERT INTO recipe (recept_naam, porties, kook_tijd)";
            $query .= "VALUES (:recept_naam, :porties, :kook_tijd)";

            $stmt = $conn->prepare($query);

            $stmt->execute([
                'recept_naam' => $recept_naam,
                'porties' => $porties,
                'kook_tijd' => $kook_tijd
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
        include 'toevoeg.php';
    }

} else {
    echo "fout opgetreden";
}
