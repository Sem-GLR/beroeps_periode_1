<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Contact form</title>
    <link rel="stylesheet" href="./css/new_style.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#006E69] font-[k2d]">

<nav class="flex justify-center items-center text-shadow-[1px_1px_black] h-[90px] bg-gray opacity-300 fixed top-0 w-[100%] z-10 font-[k2d] text-xl">
    <a class="absolute left-4 text-5xl font-[bebas] text-[#FF8400]" href="index.php">FoodFreaks</a>

    <div class="mx-auto w-[600px] flex justify-around text-white">
        <a href="index.php">Main page</a>
        <a href="overzicht.php">Recipes</a>
        <a href="about.php">About us</a>
        <a href="contact.php">Contact us</a>
    </div>
    <div class="absolute right-4 text-shadow-none px-4 py-2 bg-[#FFD27A] rounded-4xl" href="login.php">Sign up / Log in</div>
</nav>

  <main class="w-[760px] mt-49 mx-auto">
    <section class="contact-form-card bg-white rounded-lg mt-3 px-5 py-2 shadow-2xl">
      <p class="text-black text-xl font-[bebas] text-center">FoodFreaks contact</p>
      <h1 class="text-5xl font-[bebas] text-center text-[#FF8400] underline">Bericht verzonden!</h1>
        <p class="text-center mb-5 text-[#000000a6]">Uw bericht is verzonden. Wij komen op u terug via de e-mail! <u>(Niet vergeten om de spam- en verwijderboxen te checken!!)</u></p>


        <div class="flex items-center justify-around w-[300px] mx-auto">
            <div class="w-[135px] text-white py-2.5 hover h-fit text-center rounded-4xl text-sm bg-[#FF8400]"><a href="overzicht.php"><u>Terug naar FoodFreaks</u></a></div>
            <div class="w-[135px] py-2.5 hover h-fit text-center rounded-4xl text-sm bg-[#FFD700]"><a href="index.php"><u>Hoofdpagina</u></a></div>
        </div>
    </section>
  </main>

  <script src="js/script.js" defer></script>
</body>

</html>
