<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Contact</title>

  <link rel="stylesheet" href="./css/bg.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script src="js/nav.js" defer></script>

    <link rel="stylesheet" href="./css/new_style.css">
</head>

<body class="isolate bg-[#006E69] overflow-x-auto relative font-[k2d] text-white">

<!-- Navigatiebar -->
<nav class="flex justify-center items-center text-shadow-[1px_1px_black] h-[90px] bg-gray opacity-300 fixed top-0 w-[100%] z-10 text-xl">
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
        <a class="hover" href="about.php">About us</a>
        <a class="hover text-[#FF8400]" href="contact.php">Contact us</a>

        <div class="hover h-fit flex items-center mt-[-5px] w-fit right-4 text-black text-shadow-none px-4 bg-[#FFD700] rounded-4xl"><a href="login.php" class="lg:block w-fit h-fit">Sign up / Log in</a></div>
    </div>
</nav>


<main class="contact-main text-2xl mt-35 md:mx-auto">
    <header class="text-center flex justify-center">

        <div class="z-2 absolute w-[90%] lg:w-[80%]">
      <p class="font-[bebas] text-6xl text-[#FF8400]">Wij horen graag van jou!</p>
      <p>Zijn er dingen die naar de sh*t zijn gegaan op de website of heb je een error gevonden? Neem contact met ons! </p>
            <div class="h-fit w-fit md:w-[700px] mx-auto"><img src="../media/images/chef_calling.jpg" class="w-[fit] h-auto mx-auto mt-10 border-3 border-[#A2C9CD] w-auto rounded-lg"></div>
        <div class="w-[135px] mb-10 py-2.5 mt-10 hover mx-auto h-fit scale-[140%] text-center rounded-4xl text-sm bg-[#FF8400]"><a href="contact-form.php"><u>Contact opnemen</u></a></div>
        </div>

    </header>
  </main>

</body>

</html>
