<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | About us</title>

  <link rel="stylesheet" href="./css/new_style.css">
    <link rel="stylesheet" href="./css/bg.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="js/nav.js" defer></script>

    <link rel="stylesheet" href="./css/new_style.css">
</head>

<body class="bg-[#006E69] font-[k2d] text-white py-10">
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
        <a class="hover text-[#FF8400]" href="about.php">About us</a>
        <a class="hover" href="contact.php">Contact us</a>

        <div class="hover h-fit flex items-center mt-[-5px] w-fit right-4 text-black text-shadow-none px-4 bg-[#FFD700] rounded-4xl"><a href="login.php" class="lg:block w-fit h-fit">Sign up / Log in</a></div>
    </div>
</nav>

  <main class="mt-30 z-10">
    <header class="sm:w-[60%] w-[95%] mx-auto">
      <p class="font-[bebas] text-8xl text-center text-[#FF8400]">The developers behind Foodfreaks</p>
      <p class="text-center text-2xl">Wij zijn de developers van Foodfreaks. Deze website hebben wij gemaakt en ontworpen om het ontdekken van recepten simpel en gemakkelijk te laten voelen.</p>
        <div class="w-[200px] py-3 mt-10 hover mx-auto h-fit text-center rounded-4xl text-xl bg-[#FF8400]"><a href="contact-form.php"><u>Ontdek ons keuken</u></a></div>
    </header>

    <section class="flex justify-center flex-wrap gap-[1.2rem] mt-10" aria-label="Meet the FoodFreaks team">
      <article class="min-h-[390px] team-card w-[365px] flex flex-col justify-between overflow-hidden bg-[#b8e0de] px-3 py-6 rounded-2xl transition hover:bg-transparent hover:border-1 hover:border-white hover:shadow-xl hover:shadow-[#ffd60033] hover:scale-[101%] hover:translate-y-[-10px]">
        <div>
          <div class="rounded-4xl p-[3px] h-[51.188px] w-[51.188px] flex justify-center items-center bg-[#FF8400] font-bold">
              <img src="../media/images/placeholder.png" class="rounded-4xl border-white h-[100%] w-auto">
          </div>
            <div class="mt-[25.6px] text-[18.4px] text-[#FF8400]">Kosta Sârbu</div>
          <p class="font-[.82rem] text-black">Front-end developer</p>
          <p class="text-black mt-9">“-”</p>
        </div>
          <div class="text-[0.78rem] text-black ml-auto">01</div>
      </article>

        <article class="min-h-[390px] team-card w-[365px] flex flex-col justify-between overflow-hidden bg-[#b8e0de] px-3 py-6 rounded-2xl transition hover:bg-transparent hover:border-1 hover:border-white hover:shadow-xl hover:shadow-[#ffd60033] hover:scale-[101%] hover:translate-y-[-10px]">
            <div>
                <div class="rounded-4xl p-[3px] h-[51.188px] w-[51.188px] flex justify-center items-center bg-[#FF8400] font-bold">
                    <img src="../media/images/placeholder.png" class="rounded-4xl border-white h-[100%] w-auto">
                </div>
                <div class="mt-[25.6px] text-[18.4px] text-[#FF8400]">Kosta Sârbu</div>
                <p class="font-[.82rem] text-black">Front-end developer</p>
                <p class="text-black mt-9">“-”</p>
            </div>
            <div class="text-[0.78rem] text-black ml-auto">01</div>
        </article>

        <article class="min-h-[390px] team-card w-[365px] flex flex-col justify-between overflow-hidden bg-[#b8e0de] px-3 py-6 rounded-2xl transition hover:bg-transparent hover:border-1 hover:border-white hover:shadow-xl hover:shadow-[#ffd60033] hover:scale-[101%] hover:translate-y-[-10px]">
            <div>
                <div class="rounded-4xl p-[3px] h-[51.188px] w-[51.188px] flex justify-center items-center bg-[#FF8400] font-bold">
                    <img src="../media/images/placeholder.png" class="rounded-4xl border-white h-[100%] w-auto">
                </div>
                <div class="mt-[25.6px] text-[18.4px] text-[#FF8400]">Kosta Sârbu</div>
                <p class="font-[.82rem] text-black">Front-end developer</p>
                <p class="text-black mt-9">“-”</p>
            </div>
            <div class="text-[0.78rem] text-black ml-auto">01</div>
        </article>

        <article class="min-h-[390px] team-card w-[365px] flex flex-col justify-between overflow-hidden bg-[#b8e0de] px-3 py-6 rounded-2xl transition hover:bg-transparent hover:border-1 hover:border-white hover:shadow-xl hover:shadow-[#ffd60033] hover:scale-[101%] hover:translate-y-[-10px]">
            <div>
                <div class="rounded-4xl p-[3px] h-[51.188px] w-[51.188px] flex justify-center items-center bg-[#FF8400] font-bold">
                    <img src="../media/images/nicolas.jpeg" class="rounded-4xl border-white h-[100%] w-auto">
                </div>
                <div class="mt-[25.6px] text-[18.4px] text-[#FF8400]">Nicolas Szczepanek</div>
                <p class="font-[.82rem] text-black">Full-stack developer</p>
                <p class="text-black mt-9">“Ik heb voor een groot deel de database gemaakt, zowel als een deel van de structuur van de site en de werkingen.”</p>
            </div>
            <div class="text-[0.78rem] text-black ml-auto">01</div>
        </article>
    </section>
  </main>
</body>

</html>
