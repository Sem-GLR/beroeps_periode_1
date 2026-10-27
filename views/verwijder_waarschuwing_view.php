<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>waarschuwing</title>
</head>
<body>

<!-- VVV Maak de link naar deze pagina de code hieronder VVV-->

<!-- <a href="views/waarschuwing_verwijder_view.php?ID=--><?php //=$rij['ID']?><!--&naam=--><?php //=$rij['naam']?><!--">verwijder</a>-->



<?php
//IDs voor info op pagina
$ID = $_GET['ID'];
$naam = $_GET['naam'];
?>


<h1>weet u zeker dat u <?= $naam ?> wilt verwijderen?</h1>
<p>U kunt dit niet ongedaan maken.</p>

<!--links naar de volgende paginas -->
<a href="{link naar homepage}">nee</a>
<a href="../verwijder.php?ID=<?=$ID?>">ja</a>
</body>
</html>