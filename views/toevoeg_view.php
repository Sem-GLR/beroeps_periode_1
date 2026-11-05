<?php
$fouten = $fouten ?? [];
$oud    = $oud ?? [];

function oud(array $oud, string $veld, string $standaard = ''): string {
    return htmlspecialchars($oud[$veld] ?? $standaard, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recept toevoegen | FoodFreaks</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/toevoeg.css">
</head>
<body>

<header>
    <div class="header-balk">
        <a class="logo" href="index.php">FoodFreaks</a>
        <a class="knop-oranje" href="logout.php">Log uit</a>
    </div>
    <h1>Recept toevoegen</h1>
</header>

<main>
    <?php if (!empty($fouten)): ?>
        <div class="fouten" role="alert">
            <strong>Er ging iets mis. Pas dit aan en probeer het opnieuw:</strong>
            <ul>
                <?php foreach ($fouten as $fout): ?>
                    <li><?= htmlspecialchars($fout, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="toevoeg_verwerk.php" method="post" enctype="multipart/form-data">

        <!-- Basisgegevens -->
        <div class="blok">
            <div class="veld">
                <label for="titel">Titel van het recept</label>
                <input type="text" id="titel" name="titel" maxlength="80" required
                       value="<?= oud($oud, 'titel') ?>">
            </div>

            <div class="rij">
                <div class="veld">
                    <label for="kooktijd">Kooktijd (minuten)</label>
                    <input type="number" id="kooktijd" name="kooktijd" min="1" max="1440" required
                           value="<?= oud($oud, 'kooktijd') ?>">
                </div>
                <div class="veld">
                    <label for="porties">Porties</label>
                    <input type="number" id="porties" name="porties" min="1" max="50" required
                           value="<?= oud($oud, 'porties') ?>">
                </div>
            </div>

            <div class="veld">
                <label for="afbeelding">Foto</label>
                <input type="file" id="afbeelding" name="afbeelding" accept="image/jpeg,image/png,image/webp">
                <p class="hint">JPG, PNG of WebP, maximaal 5 MB.</p>
            </div>

            <div class="veld">
                <label>Tags</label>
                <div class="tags">
                    <?php
                    // Haal deze uit je database zodra je een tags-tabel hebt
                    $beschikbareTags = $beschikbareTags ?? ['Groente', 'Saus', 'Pasta', 'Vegetarisch', 'Snel', 'Goedkoop'];
                    $gekozen = $oud['tags'] ?? [];
                    foreach ($beschikbareTags as $tag):
                        $veilig = htmlspecialchars($tag, ENT_QUOTES, 'UTF-8');
                        ?>
                        <label>
                            <input type="checkbox" name="tags[]" value="<?= $veilig ?>"
                                <?= in_array($tag, $gekozen, true) ? 'checked' : '' ?>>
                            <span><?= $veilig ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <h2>Wat heb je nodig?</h2>

        <div class="rij">
            <!-- Ingrediënten -->
            <div class="blok">
                <label>Ingrediënten</label>
                <div id="ingredienten">
                    <div class="lijst-rij">
                        <input type="text" name="ingredienten[0][hoeveelheid]" placeholder="100g" maxlength="20" aria-label="Hoeveelheid">
                        <input type="text" name="ingredienten[0][naam]" placeholder="Ingrediënt" maxlength="60" aria-label="Ingrediënt">
                        <button type="button" class="verwijder" aria-label="Verwijder ingrediënt">×</button>
                    </div>
                </div>
                <button type="button" class="toevoegen" data-lijst="ingredienten">+ Ingrediënt toevoegen</button>
            </div>

            <!-- Keukenspullen -->
            <div class="blok">
                <label>Keukenspullen</label>
                <div id="keukenspullen">
                    <div class="lijst-rij">
                        <input type="text" name="keukenspullen[]" placeholder="Bijv. Pot (2x)" maxlength="60" aria-label="Keukenspul">
                        <button type="button" class="verwijder" aria-label="Verwijder keukenspul">×</button>
                    </div>
                </div>
                <button type="button" class="toevoegen" data-lijst="keukenspullen">+ Keukenspul toevoegen</button>
            </div>
        </div>

        <h2>Hoe maak je het?</h2>

        <div class="blok">
            <div id="stappen">
                <div class="lijst-rij">
                    <span class="stap-nummer">1.</span>
                    <input type="text" name="stappen[]" placeholder="Korte uitleg" maxlength="300" aria-label="Stap">
                    <button type="button" class="verwijder" aria-label="Verwijder stap">×</button>
                </div>
            </div>
            <button type="button" class="toevoegen" data-lijst="stappen">+ Stap toevoegen</button>
        </div>

        <div class="acties">
            <a href="overzicht.php" class="knop-oranje knop-groot knop-annuleer">Annuleren</a>
            <button type="submit" class="knop-oranje knop-groot">Recept plaatsen</button>
        </div>
    </form>
</main>

<script src="js/toevoeg.js" defer></script>

</body>
</html>