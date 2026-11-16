<?php

// $query_read = "SELECT :select FROM :table :where";
// $query_create = "INSERT INTO :table VALUES(:values)";

// maak eerst sessions!! bewerk dit als het moet!!!
// Gebruiker via gebruikernaam ophalen
    $user_username = $_SESSION["user_name"];

// Gebruikers-ID ophalen via gebruikersnaam van gebruiker
    $select = "ID";
    $table = "user";
    $where = "WHERE user_name = $user_username";
    require "read_config.php";

// Gebruikers-ID (array);
    $user_ID = $result_read;

// Ingredienten:
    // Houdt de hoeveelheid IDs van ingredienten bij
    $arrEst_ID = [];



    // Ingevoerde data wordt gefilterd en opgeslagen in variabelen ($manier, $ingredient_1, enz.);
    // BEWERK DIT LATER ZODAT HET PER HOEVEELHEID MANIER DIT CODE HERHAALT!!
    $filter = ["manier", "ingredient_1", "ingredient_2", "ingredient_3", "ingredient_4", "ingredient_5"];
    $store = [$manierIngr, $ingredient_1, $ingredient_2, $ingredient_3, $ingredient_4, $ingredient_5];

    for ($i = 0; count($store) + 1; $i++) {
        $store[$i] = htmlentities(strip_tags(trim($_POST[$filter[$i]])));
    }

    // rij bij ingredienten tabel wordt toegevoegd
    $table = "ingredient(ID, manier, ingredient_1, ingredient_2, ingredient_3, ingredient_4, ingredient_5)";
    $values = "NULL, $manierIngr, $ingredient_1, $ingredient_2, $ingredient_3, $ingredient_4, $ingredient_5";
    require "create_config.php";

    $select = "*";
    $table = "ingredient";
    $where = NULL;
    require "configs/read_config.php";

    // Haalt het ID op van de gestuurde ingredienten rij
    $est_ID = $result_readCount["ID"];

    // Verstuurt de IDs naar een array zodat zij later gebruikt kunnen worden
    array_push($arrEst_ID, $est_ID);


// TAGS TOEVOEGEN!!!!!

// Tussentabel recipe_ingredient (ALLEEN INGREDIENT ID WORDT TOEGEVOEGD)

    // Alleen ingredient toevoegen naar rij tussentabel recipe_ingredient
    for ($i = 0; $i < $arrEst_ID; $i++) {
        $table = "recipe_ingredient(ingredient_ID, recipe_ID)";
        $values = "$arrEst_ID[$i], NULL";
        require "configs/create_config.php";
    }


// Instructies:
    // Houdt de hoeveelheid IDs van instructies bij
    $arrEst_ID = [];

    // het toevoegen van nieuwe instructies
    $filter = ["manier", "instructie_1", "instructie_2", "instructie_3", "instructie_4", "instructie_5"];
    $store = [$manierInstr, $instructie_1, $instructie_2, $instructie_3, $instructie_4, $instructie_5];

    for ($i = 0; count($store) + 1; $i++) {
        $store[$i] = htmlentities(strip_tags(trim($_POST[$filter[$i]])));
    }

    // het toevoegen van instructies
    $table = "instructie(ID, manier, instructie_1, instructie_2, instructie_3, instructie_4, instructie_5)";
    $values = "NULL, $manierInstr, $instructie_1, $instructie_2, $instructie_3, $instructie_4, $instructie_5";
    require "configs/create_config.php";

    // Haalt het ID op van de gestuurde instructie rij
    $est_ID = $result_readCount["ID"];

    // Verstuurt de IDs naar een array zodat zij later gebruikt kunnen worden
    array_push($arrEst_ID, $est_ID);

// Tussentabel recipe_instructie (ALLEEN INSTRUCTIE ID WORDT TOEGEVOEGD)

    // Alleen instructies toevoegen naar rij tussentabel recipe_instructie
    for ($i = 0; $i < $arrEst_ID; $i++) {
        $table = "recipe_instructie(recipe_ID, instructie_ID)";
        $values = "NULL, $arrEst_ID[$i]";
        require "configs/create_config.php";
    }


// Keukenspul:
    // Maakt het array weer leeg
    $$arrEst_ID = [];

    // het toevoegen van nieuwe keukenspullen
    $filter = ["manier", "item_1", "item_2", "item_3", "item_4", "item_5"];
    $store = [$manierKeukspul, $item_1, $item_2, $item_3, $item_4, $item_5];

    for ($i = 0; count($store) + 1; $i++) {
        $store[$i] = htmlentities(strip_tags(trim($_POST[$filter[$i]])));
    }

    // Het toevoegen van keukenspullen
    $table = "keukspul(ID, manier, item_1, item_2, item_3, item_4, item_5)";
    $values = "NULL, $manierKeukspul, $item_1, $item_2, $item_3, $item_4, $item_5";
    require "configs/create_config.php";

    // Haalt het ID op van de gestuurde instructie rij
    $est_ID = $result_readCount["ID"];

    // Verstuurt de IDs naar een array zodat zij later gebruikt kunnen worden
    array_push($$arrEst_ID, $est_ID);


// Tussentabel recipe_keukspul (ALLEEN RECIPE ID WORDT TOEGEVOEGD)

// Alleen recipe toevoegen naar rij tussentabel recipe_keukspul
for ($i = 0; $i < $$arrEst_ID; $i++) {
    $table = "recipe_keukspul(recipe_ID, instructie_ID)";
    $values = "NULL, $$arrEst_ID[$i]";
    require "configs/create_config.php";
}



// Recipe (!!):

// for ($i = 0; $i < $hoeveelManieren; $i++ ) {

    // Receptnaam ophalen
    $recept_naam = htmlentities(strip_tags(trim($_POST["recept_naam"])));

    // Kooktijd ophalen
    $kook_tijd = htmlentities(strip_tags(trim($_POST["kook_tijd"])));

    // Huidige datum halen en in $post_datum zetten
    $currentDate = getdate();
    $day = $currentDate["mday"];
    $month = $currentDate["month"];
    $year = $currentDate["year"];

    $post_datum = "$day/$month/$year";

    // ID(s) van keukspul ophalen (BEWERKEN)
    $keukspul_ID = $arrEst_ID[$i];

    // ID(s) van instructies ophalen (BEWERKEN)
    $instructie_ID = $arrEst_ID[$i];


    $filter = ["user_ID", "instructie_ID", "keukspul_ID", "ingredient_ID", "review_ID", "tag_ID", "recept_naam", "rating", "kook_tijd", "porties"];
    $store = [$user_ID, $instructie_ID, $keukspul_ID, $ingredient_ID, $review_ID, $tag_ID, $recept_naam, $rating, $kook_tijd, $porties];

    for ($i = 0; count($store) + 1; $i++) {
        $store[$i] = htmlentities(strip_tags(trim($_POST[$filter[$i]])));
    }



    $table = "recipe (ID, user_ID, instructie_ID, keukspul_ID, ingredient_ID, review_ID, tag_ID, recept_naam, rating, kook_tijd, porties, post_datum)";
    $values = "NULL, $user_ID, $instructie_ID, $keukspul_ID, NULL, $tag_ID, $recept_naam, NULL, $kook_tijd, $porties, $post_datum";
    require "configs/create_config.php";

    // TABELLEN UPDATEN!!

