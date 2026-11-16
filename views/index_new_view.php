<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>new index</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="./css/new_style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/overzichtspagina.css">

    <script src="./js/nav.js" defer></script>
    <script src="./js/script.js" defer></script>
    <script src="./js/overzichtspagina.js" defer></script>

</head>

<body>

<!-- hero -->
<header class="hero">
    <video id="heroVideo" autoplay muted loop playsinline preload="auto">
        <source src="../media/herovid.mp4" type="video/mp4">
    </video>

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

    <div class="copy">
        <h1 class="text-white z-auto test">Cook something worth talking about.</h1>
        <p>Recipes from people who can't stop thinking about dinner.</p>
        <form class="search w-[450px]" role="search" id="search">
            <input type="search" id="q" name="q" placeholder="Search by recipe, ingredient or keyword"
                   aria-label="Search by recipe, ingredient or keyword">
            <button type="submit" aria-label="Search"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                           stroke-width="2.4" stroke-linecap="round" aria-hidden="true">
                    <circle cx="11" cy="11" r="7" />
                    <path d="M20 20l-3.5-3.5" />
                </svg></button>
        </form>
    </div>
</header>

<!-- demo overzichtspagina -->
<main class="page">
    <div class="mt-10">
        <h1 class="text-white text-[88px] text-center">Onze recepten (demo):</h1>
    </div>

    <div class="mt-10">
        <hr class="mb-10">
        <div class="filters">
            <span class="filters-label" id="filters-label">Sorteren op:</span>
            <div class="filter-buttons" id="filters" role="group" aria-labelledby="filters-label"></div>
        </div>
    </div>

    <div id="sections"></div>
</main>

<!-- onderkant gedeelte -->

<section class="home-about min-h-screen px-5 py-20 text-white sm:px-8 lg:px-[4.5rem] lg:py-32"
         id="about" aria-labelledby="about-title">
    <div class="mx-auto mb-12 max-w-3xl text-center sm:mb-20">
        <p class="mb-4 text-xs font-bold uppercase tracking-[.16em] text-[#007a75]">The developers behind FoodFreaks</p>
        <h2 id="about-title" class="mb-5 font-[K2D] text-5xl font-extrabold leading-[.98] tracking-[-.03em] sm:text-6xl">
            Built by a team<br class="hidden sm:block"> that loves to create.
        </h2>
        <p class="mx-auto max-w-2xl text-base leading-relaxed text-white/75 sm:text-xl">We are the developers behind
            FoodFreaks. We designed and built this website to make discovering recipes feel simple, welcoming and enjoyable.
        </p>
    </div>

    <div class="mx-auto grid max-w-6xl grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <article
                class="min-h-[330px] rounded-xl border border-[#b8e0de] bg-[#b8e0de] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#ffd27a]">
            <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#007a75] text-sm font-extrabold text-white"
                 aria-hidden="true">Ks</div>
            <h3 class="text-lg font-semibold">Kosta Sarbu</h3>
            <p class="text-sm text-black/55">Front-end developer</p>
            <p class="mt-9 leading-relaxed text-black/90">“I turned our ideas into a clear and inviting interface that
                makes FoodFreaks easy to explore.”</p>
        </article>
        <article
                class="min-h-[330px] rounded-xl border border-[#bde4df] bg-[#bde4df] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#079996]">
            <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#079996] text-white text-sm font-extrabold"
                 aria-hidden="true">NS</div>
            <h3 class="text-lg font-semibold">Nicolas Szczepanek</h3>
            <p class="text-sm text-black/55">Back-end developer</p>
            <p class="mt-9 leading-relaxed text-black/90">“I built the structure behind the website so every part of
                the experience works smoothly.”</p>
        </article>
        <article
                class="min-h-[330px] rounded-xl border border-[#ffd6a3] bg-[#ffd6a3] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#ff9208]">
            <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#ff9208] text-sm font-extrabold text-black"
                 aria-hidden="true">MR</div>
            <h3 class="text-lg font-semibold">Maxim van Roon</h3>
            <p class="text-sm text-black/55">UI/UX designer</p>
            <p class="mt-9 leading-relaxed text-black/90">“I focused on making every page feel friendly, useful and easy
                to understand.”</p>
        </article>
        <article
                class="min-h-[330px] rounded-xl border border-[#f2b1aa] bg-[#f2b1aa] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#c00000]">
            <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#c00000] text-sm font-extrabold text-white"
                 aria-hidden="true">SD</div>
            <h3 class="text-lg font-semibold">Sem van Doorn</h3>
            <p class="text-sm text-black/55">Backend developer</p>
            <p class="mt-9 leading-relaxed text-black/90">“I connected the design and functionality to bring the
                FoodFreaks idea to life.”</p>
        </article>
    </div>
</section>

<section class="home-contact" id="contact" aria-labelledby="contact-title">
    <div class="home-contact-header">
        <p>We would love to hear from you</p>
        <h2 id="contact-title">Talk to our food lovers</h2>
        <span>Have questions about recipes or how FoodFreaks works? We’re always happy to chat!</span>
    </div>
    <div class="home-contact-grid">
        <article class="home-contact-card">
            <div class="home-contact-icon" aria-hidden="true">✉</div>
            <h3>Chat with us</h3>
            <p>Ask us anything about your next meal.</p>
            <a href="contact-form.php?topic=chat">Start a conversation</a>
        </article>
        <article class="home-contact-card">
            <div class="home-contact-icon" aria-hidden="true">?</div>
            <h3>Need some help?</h3>
            <p>We’re here to help with your FoodFreaks experience.</p>
            <a href="contact-form.php?topic=help">Get support</a>
        </article>
    </div>
</section>

</body>

</html>