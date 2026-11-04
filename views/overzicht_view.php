<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodFreaks | Overzichtspagina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=K2D:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/overzichtspagina.css">

    <!-- JS script moet bewerkt worden. SQL komt erbij -->
    <script src="../js/overzichtspagina.js" defer></script>

</head>
<body>
<header class="site-header">
    <nav class="nav">
        <a class="logo" href="#">FoodFreaks</a>
        <div class="nav-actions">
            <a class="nav-link" href="#">Log in</a>
            <a class="btn btn-orange" href="#">Sign up</a>
        </div>
    </nav>
    <h1>Het overzichtspagina</h1>
</header>

<main class="page">
    <div class="toolbar">
        <div class="filters">
            <span class="filters-label" id="filters-label">Sorteren op:</span>
            <div class="filter-buttons" id="filters" role="group" aria-labelledby="filters-label"></div>
        </div>
        <div class="search-block">
            <input type="search" id="search" class="search" placeholder="Sorteren op naam" aria-label="Zoek recept op naam">
            <a class="btn btn-orange btn-small" href="#nieuw-recept">Nieuw recept plaatsen</a>
        </div>
    </div>

    <div id="sections"></div>

<!--    BELANGRIJK: stop de html code voor de recepten in de foreach-->

    <!--    kijkt of database is gevuld-->
    <?php
    if ($aantalRijen > 0){ ?>
        <!--   voor elk recept zet het de html/php code hierbinnen-->
        <?php foreach ($resultaten as $rij) { ?>
                <div style="border: black solid 5px; width: fit-content">
            <h3> recept_naam:  <?= $rij['recept_naam']?></h3>
            <h3>rating: <?= $rij['rating'] ?></h3>
            <h3>kook_tijd: <?= $rij['kook_tijd'] ?></h3>
            <p style="position: relative" >datum: <?= $rij['post_datum'] ?></p>

<!--        kijkt of er tags zijn-->
            <?php if ($aantalRijen_tag > 0){
//                elke tag word bekeken
                    foreach ($resultaten_tag as $tag) {?>
        <p> ik moet nog wat veranderen aan de tags</p>
            <?php }
            }else{?>
                <p>geen tags</p>
            <?php }?>
                </div>
        <?php }
    } else {
        echo '<h2>er zit geen data in het database</h2>';
    } ?>

    <section class="empty" id="nieuw-recept">
        <h2>The trail runs cold...</h2>
        <svg class="empty-art" viewBox="0 0 190.0 153.0" role="img" aria-label="Een vork met een gele draad die naar een mond in profiel loopt"><path fill="#fff" fill-rule="evenodd" d="M128.7 87.0L128.7 87.7L130.3 88.5L141.7 92.2L143.2 99.8L143.3 103.0L142.7 107.5L143.2 109.3L148.8 112.8L155.5 115.7L159.5 116.8L160.7 117.8L166.0 129.5L167.8 136.0L168.8 136.5L168.7 133.8L166.7 127.8L161.5 116.5L151.8 112.8L147.5 110.7L144.7 108.8L143.8 107.7L144.7 103.8L144.7 100.5L142.8 93.3L143.0 91.8L153.3 87.7L155.3 86.2L155.5 85.3L154.5 85.2L150.2 87.8L145.0 89.8L141.7 90.3L138.3 90.0L130.3 87.0ZM133.5 65.8L132.3 66.3L132.0 68.5L128.3 76.5L127.0 81.0L127.2 83.7L128.0 83.0L129.8 76.0L133.7 67.2ZM63.8 64.2L63.0 64.7L63.0 66.7L61.8 70.5L59.7 73.5L54.3 78.8L53.2 82.8L52.0 90.3L51.0 105.8L51.0 118.7L51.8 124.2L50.2 125.5L45.7 126.0L45.2 126.3L45.3 127.2L51.3 126.7L52.8 125.2L52.3 108.0L52.8 93.5L54.0 85.2L55.2 79.8L60.8 74.2L62.8 71.0L63.8 68.2L64.2 65.5ZM157.2 61.2L156.7 61.5L157.0 63.5L158.8 66.3L158.8 67.3L157.0 69.7L157.2 70.3L157.8 70.5L159.5 68.7L162.2 67.8L162.7 66.5L159.8 65.5ZM64.2 58.0L63.2 58.3L63.3 59.8L64.3 59.2ZM35.5 53.2L35.2 55.0L37.0 66.5L39.2 71.7L42.8 77.3L39.2 96.2L38.0 108.2L38.2 118.5L39.0 123.0L40.0 123.8L40.3 122.7L39.8 121.3L39.3 115.8L39.8 100.5L41.0 92.5L44.2 77.2L40.0 70.5L38.2 66.2L36.8 59.0L36.7 53.8L36.2 53.2ZM65.2 48.2L64.5 48.2L64.0 48.8L63.7 54.5L64.0 55.3L64.8 55.0L65.5 49.3ZM127.8 48.0L127.5 48.8L132.2 61.0L133.5 63.2L133.7 60.8L131.0 55.0L128.7 48.3ZM55.0 48.0L54.3 49.0L55.3 49.7L55.8 48.5ZM36.3 42.0L35.2 43.7L35.0 49.2L35.7 50.2L36.5 49.8L36.7 42.5ZM65.8 35.5L65.0 36.0L64.7 44.7L65.0 45.3L65.8 44.3L66.2 39.7ZM63.2 35.3L62.3 35.3L57.5 42.5L56.2 45.7L57.2 45.8L59.0 42.3L63.0 36.5ZM49.2 33.0L48.2 33.7L47.0 36.3L47.2 38.5L46.2 39.5L45.3 41.7L45.3 42.7L45.8 43.2L46.7 42.5L48.0 37.0L49.7 33.7ZM50.8 31.2L50.7 32.0L52.0 36.2L53.3 43.7L54.0 45.5L54.5 45.7L54.8 43.8L52.7 33.8L51.7 31.3ZM39.3 30.3L39.0 31.8L40.2 37.8L43.2 46.7L43.8 47.8L44.7 48.2L45.3 46.3L44.0 44.7L43.0 42.7L42.7 40.7L41.2 38.2L40.7 33.0L40.2 31.0ZM37.3 30.0L36.3 30.8L35.8 39.2L36.2 39.5L36.8 39.0L37.7 30.3ZM139.3 17.2L139.2 18.0L144.3 27.5L147.8 32.0L149.7 33.5L149.8 34.5L143.2 40.0L140.3 40.2L135.0 42.3L132.0 44.3L130.3 46.0L130.3 46.7L131.3 46.7L137.2 42.5L141.7 41.5L143.7 41.8L148.7 45.0L152.2 48.3L153.2 48.5L153.2 47.5L150.8 45.2L146.0 41.8L145.0 40.7L151.0 35.2L151.3 33.5L145.8 27.5L140.2 17.3ZM155.5 5.7L155.0 5.3L152.7 5.7L149.7 7.2L141.3 15.0L141.3 15.7L142.3 15.7L150.5 8.2L153.0 6.8L154.8 6.8L155.5 6.3Z"/><path fill="#e6e533" fill-rule="evenodd" d="M33.0 44.0L33.2 49.0L35.5 52.5L41.5 54.8L45.7 55.8L71.8 57.8L76.7 58.8L79.5 58.8L97.0 61.7L120.2 64.7L130.3 65.0L132.0 65.5L134.5 65.0L142.2 65.0L142.8 64.7L142.8 64.2L142.2 63.8L127.8 64.0L119.7 63.0L115.8 63.0L112.0 62.2L106.7 61.8L104.5 61.2L100.3 61.0L97.5 60.2L93.8 60.0L83.5 58.2L78.7 57.8L75.2 57.0L72.0 57.0L63.3 55.7L60.5 55.8L53.7 55.0L49.3 55.0L42.8 54.0L37.5 51.8L34.8 49.7L33.8 47.2L33.8 45.3L36.7 40.7L36.3 40.2L35.2 40.3ZM41.8 37.7L41.8 38.3L43.3 39.3L43.2 42.2L44.3 44.7L45.5 45.8L47.7 46.7L50.8 46.8L55.5 47.8L64.7 47.8L66.3 46.8L67.7 44.5L67.7 42.8L66.5 42.2L65.8 45.3L63.2 46.8L58.5 46.8L55.3 46.0L49.0 45.7L46.7 44.8L44.8 42.5L44.8 39.8L46.7 38.5L46.7 37.7L45.7 37.2L43.2 37.2Z"/></svg>
        <p>Als alleen iemand iets zou kunnen toevoegen..</p>
        <a class="btn btn-orange btn-large" href="#">Nieuw recept posten</a>
    </section>
</main>

</body>
</html>