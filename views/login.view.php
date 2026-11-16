<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Log in</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script src="js/nav.js" defer></script>

    <link rel="stylesheet" href="./css/bg.css">
  <link rel="stylesheet" href="./css/logs.css">
    <link rel="stylesheet" href="./css/new_style.css">
</head>

<body class="bg-[#006E69]">

<!-- Navigatiebar -->
<nav class="flex justify-center items-center text-shadow-[1px_1px_black] text-white h-[90px] bg-gray opacity-300 fixed top-0 w-[100%] z-10 text-xl">
    <a class="absolute hover left-4 text-5xl font-[bebas] text-[#FF8400]" href="index.php">FoodFreaks</a>

    <!-- normale navbar -->
    <div class="w-[600px] hidden lg:flex mx-auto flex justify-around text-white">
        <a href="index.php" class="hover">Main page</a>
        <a href="overzicht.php" class="hover">Recipes</a>
        <a href="about.php" class="hover">About us</a>
        <a href="contact.php" class="hover">Contact us</a>
    </div>
    <a href="login.php" class="hidden lg:block w-fit h-[30px]"><div class="absolute hover flex items-center mt-[-5px] w-fit h-11 right-4 text-black text-shadow-none px-4 bg-[#FFD700] rounded-4xl">Sign up / Log in</div></a>

    <div onclick="openM('show')" class="cursor-pointer m-navbar-uitklap flex justify-around flex lg:hidden items-center w-13 h-13 absolute right-4 border-[#B8B8B8] border-3 rounded-[100%]">
        <div class="w-2 h-2 bg-black rounded-[100%]"></div>
        <div class="w-2 h-2 bg-black rounded-[100%]"></div>
        <div class="w-2 h-2 bg-black rounded-[100%]"></div>
    </div>

    <!-- mobiel navbar -->
    <div class="m-navbar opacity-1 flex text-2xl text-center flex-col rounded-2xl lg:hidden justify-around items-center border-3 border-[#FF4800] border-opacity-25 right-1 absolute h-63 w-50 bg-[#A2C9CD] mt-85">
        <a class="hover" href="index.php">Main page</a>
        <a class="hover" href="overzicht.php">Recipes</a>
        <a class="hover text-[#FF8400]" href="about.php">About us</a>
        <a class="hover" href="contact.php">Contact us</a>

        <div class="hover h-fit flex items-center mt-[-5px] w-fit right-4 text-black text-shadow-none px-4 bg-[#FFD700] rounded-4xl"><a href="login.php" class="lg:block w-fit h-fit">Sign up / Log in</a></div>
    </div>
</nav>


<div class="mx-auto flex justify-center mt-40"><span class="font-[bebas] text-8xl text-white">Inloggen</span></div>

<div class="px-4">
  <div class="w-fit xl:w-[1100px] h-180 shadow-2xl border-1 border-[#00918E] rounded-2xl mx-auto mt-10 flex">
    <section aria-label="FoodFreaks introduction" class="hidden md:flex rounded-l-2xl bg-[url(media/images/placeholder3.jpg)] bg-[-250px] xl:bg-[-40px] bg-cover xl:w-[calc(1100px-420px)]">
        <div class="ml-3">
        <div class="mt-3 bg-[#A2C9CD] rounded-2xl shadow-[3px_3px_0px_rgb(255,215,0)] w-fit px-1 py-1"><span class="text-shadow-[2px_2px_#C20000] px-2 font-[bebas] text-6xl text-[#FF8400]">FoodFreaks</span></div>
      <div class="text-white w-[40%] lg:w-100 text-2xl font-[k2d] mt-3">
        <span class="bg-black px-1">Fresh ideas.</span><br>
        <span class="bg-black xl:px-1">Cook something worth talking about.</span><br>
      </div>
      </div>
    </section>

    <section class="rounded-2xl md:rounded-l-none rounded-r-2xl md:w-105 bg-[#A2C9CD] bg-linear-to-t from-[#FF8400] to-none">
      <div>
          <div class="mt-3 text-center"><p class="font-[bebas] text-6xl">Welkom!</p></div>

        <form action="configs/inlog-config.php" class="flex flex-col items-center" method="post">
          <div class="mt-2">
              <?php
                $not_found = $_GET["not_found"];

                if ($not_found === 1) { ?>

                        <?= '<div class="w-full h-fit py-2 bg-[#C20000] text-white rounded-2xl border-[#FFD700] border-2 text-center text-2xl font-[k2d]">Gebruiker niet gevonden!</div>' ?>

                <?php } ?>
            <label for="user" class="text-2xl font-[k2d]">Gebruikersnaam</label><br>
            <input id="user" maxlength="20" class="bg-white mt-0.5 text-2xl rounded-lg h-fit w-80 py-1 px-2" type="text" name="user" placeholder="Gebruikersnaam" required>
          </div>

            <div class="mt-2">
                <label for="pass" class="text-2xl font-[k2d]">Wachtwoord</label><br>
                <input id="pass" maxlength="20" class="bg-white mt-0.5 text-2xl rounded-lg h-fit w-80 py-1 px-2" type="password" name="pass" placeholder="Wachtwoord" required>
            </div>

            <input type="submit" value="Inloggen" class="hover cursor-pointer bg-[#FF8400] mt-4  text-2xl rounded-2xl h-fit w-33 py-1 px-2">

            <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
        </form>

        <div class="flex flex-col items-center mt-5">
            <span class="font-[bebas] text-[30px]">Ben je nieuw?</span>
            <a class="font-[k2d] text-lg text-[#636363] hover" href="signup.php"><u>Maak een account</u></a>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
