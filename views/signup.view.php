<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>FoodFreaks | Sign in</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="./css/bg.css">
    <link rel="stylesheet" href="./css/logs.css">
    <link rel="stylesheet" href="./css/new_style.css">
</head>

<body class="bg-[#006E69] pb-10">

<nav class="flex justify-center items-center text-shadow-[1px_1px_black] h-[90px] bg-gray opacity-300 fixed top-0 w-[100%] z-10 font-[k2d] text-xl">
    <a class="absolute left-4 text-5xl font-[bebas] text-[#FF8400]" href="index.php">FoodFreaks</a>

    <div class="w-[600px] flex justify-around text-white">
        <a href="index.php">Main page</a>
        <a href="overzicht.php">Recipes</a>
        <a href="about.php">About us</a>
        <a href="contact.php">Contact us</a>
    </div>
    <div class="absolute right-4 text-shadow-none px-4 py-2 bg-[#FFD27A] rounded-4xl" href="login.php">Sign up / Log in</div>
</nav>


<div class="mx-auto flex justify-center mt-40"><span class="font-[bebas] text-8xl text-white">Inschrijven</span></div>
<div class="w-[1100px] h-180 shadow-2xl border-1 border-[#00918E] rounded-2xl mx-auto mt-10 flex justify-end ">
    <section aria-label="FoodFreaks introduction" class="rounded-l-2xl bg-[url(media/images/food.jpg)] bg-[-40px] text-end px-4 bg-cover w-[calc(1100px-420px)]">
        <div class="ml-3 flex flex-col items-end">
            <div class="mt-3 bg-[#A2C9CD] rounded-2xl shadow-[-3px_-3px_0px_rgb(255,72,0)] w-fit px-1 pt-2"><span class=" text-shadow-[-2px_-2px_#C20000] flex px-2 font-[bebas] text-6xl text-[#FF8400]">FoodFreaks</span></div>
            <div class="text-white w-100 text-2xl font-[k2d] mt-3">
                <span class="bg-black px-1">Fresh ideas.</span><br>
                <span class="bg-black px-1">Cook something worth talking about.</span><br>
            </div>
        </div>
    </section>

    <section class="rounded-r-2xl w-105 bg-[#A2C9CD]">
        <div>
            <div class="mt-3 text-center w-[80%] mx-auto"><p class="font-[bebas] text-6xl">Wat fijn dat je komt meedoen!</p></div>

            <form action="#" class="flex flex-col items-center" method="post">
                <div class="mt-3">
                    <label for="user" class="text-2xl font-[k2d]">Gebruikersnaam</label><br>
                    <input id="user" maxlength="20" class="bg-white mt-0.5 text-2xl rounded-lg h-fit w-80 py-1 px-2" type="text" name="user" placeholder="Gebruikersnaam" required>
                </div>

                <div class="mt-2">
                    <label for="email" class="text-2xl font-[k2d]">Email-adres</label><br>
                    <input id="email" maxlength="50" class="bg-white mt-0.5 text-2xl rounded-lg h-fit w-80 py-1 px-2" type="email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="mt-2">
                    <label for="pass" class="text-2xl font-[k2d]">Wachtwoord</label><br>
                    <input id="pass" maxlength="20" class="bg-white mt-0.5 text-2xl rounded-lg h-fit w-80 py-1 px-2" type="password" name="password" placeholder="Wachtwoord" required>
                </div>

                <div class="mt-2">
                    <label for="pass2" class="text-2xl font-[k2d]">Wachtwoord bevestigen</label><br>
                    <input id="pass2" maxlength="20" class="bg-white mt-0.5 text-2xl rounded-lg h-fit w-80 py-1 px-2" type="password" placeholder="Wachtwoord bevestigen" required>
                </div>

                <input type="submit" value="Inschrijven" class="hover cursor-pointer bg-[#FFD700] mt-7 text-2xl rounded-2xl h-fit w-33 py-1 px-2">
            </form>

            <div class="flex flex-col items-center mt-5">
                <span class="font-[bebas] text-[30px]">Ben je al ingeschreven?</span>
                <a class="font-[k2d] text-lg text-[#636363] hover" href="login.php"><u>Inloggen</u></a>
            </div>
        </div>
    </section>
</div>
</body>

</html>
