<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>recept bewerken</title>
</head>
<body>

<?php
$ID = $_GET['ID'];

?>

<a href="../index.php">terug</a>

<?php foreach ($resultaten as $rij) { ?>
<form method="post" action="./bewerk_verwerk.php?ID=<?=$ID ?>" enctype="multipart/form-data">
    <label for="naam">naam</label>
    <input type="text" name="naam" value="<?= $rij['naam'] ?>" required>

<!-- IMPORTANT copy de recept aanmaak page form, met de value al in de input velden-->



    <input type="submit">
<!--als de input velden leeg zijn-->
    <?= $leegErr ?>

    <?php } ?>
</body>
</html>

