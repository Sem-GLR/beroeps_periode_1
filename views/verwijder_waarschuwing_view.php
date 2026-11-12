<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>waarschuwing</title>
    <link rel="stylesheet" href="../css/verwijder_waarschuwing.css">
</head>
<body>

<?php
// IDs voor info op pagina
$ID   = (int) ($_GET['ID'] ?? 0);
$naam = htmlspecialchars($_GET['naam'] ?? '', ENT_QUOTES, 'UTF-8');
?>

<hr class="lijn">

<div class="vlak">
    <div class="kaart">
        <h1>Weet u zeker dat u <?= $naam ?> wilt verwijderen?</h1>
        <p>U kunt dit niet ongedaan maken.</p>

        <!-- links naar de volgende pagina's -->
        <div class="knoppen">
            <a class="knop knop-nee" href="./index.php">Nee</a>
            <a class="knop knop-ja" href="../verwijder.php?ID=<?= $ID ?>">Ja, verwijderen</a>
        </div>
    </div>
</div>
</body>
</html>