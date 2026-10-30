<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
</head>

<body>
  <div class="loader" aria-label="Loading FoodFreaks" role="status">
    <div class="word" id="word">FoodFreaks</div>
  </div>

  <header class="hero">
    <video id="heroVideo" autoplay muted loop playsinline preload="auto">
      <source src="media/herovid.mp4" type="video/mp4">
    </video>
    <nav id="nav">
      <a class="logo" href="index.php">FoodFreaks</a>
      <ul class="links">
        <li><a href="#">Recipes</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="#contact">Contact us</a></li>
      </ul>
      <a class="cta" href="login.php">Sign up / Log in</a>
      <button class="menu" id="menu" aria-expanded="false" aria-controls="nav">Menu</button>
    </nav>
    <div class="copy">
      <h1>Cook something worth talking about.</h1>
      <p>Recipes from people who can't stop thinking about dinner.</p>
      <form class="search" role="search" id="search">
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
          aria-hidden="true">SJ</div>
        <h3 class="text-lg font-semibold">Sarah Janssen</h3>
        <p class="text-sm text-black/55">Front-end developer</p>
        <p class="mt-9 leading-relaxed text-black/90">“I turned our ideas into a clear and inviting interface that
          makes FoodFreaks easy to explore.”</p>
      </article>
      <article
        class="min-h-[330px] rounded-xl border border-[#bde4df] bg-[#bde4df] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#079996]">
        <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#079996] text-white text-sm font-extrabold"
          aria-hidden="true">LM</div>
        <h3 class="text-lg font-semibold">Lucas Meijer</h3>
        <p class="text-sm text-black/55">Back-end developer</p>
        <p class="mt-9 leading-relaxed text-black/90">“I built the structure behind the website so every part of
          the experience works smoothly.”</p>
      </article>
      <article
        class="min-h-[330px] rounded-xl border border-[#ffd6a3] bg-[#ffd6a3] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#ff9208]">
        <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#ff9208] text-sm font-extrabold text-black"
          aria-hidden="true">NA</div>
        <h3 class="text-lg font-semibold">Nora Ahmed</h3>
        <p class="text-sm text-black/55">UI/UX designer</p>
        <p class="mt-9 leading-relaxed text-black/90">“I focused on making every page feel friendly, useful and easy
          to understand.”</p>
      </article>
      <article
        class="min-h-[330px] rounded-xl border border-[#f2b1aa] bg-[#f2b1aa] bg-[linear-gradient(rgba(0,0,0,.055)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,.055)_1px,transparent_1px)] bg-[size:2.2rem_2.2rem] p-7 text-black transition duration-300 hover:-translate-y-1.5 hover:border-[#c00000]">
        <div class="mb-6 grid h-[3.2rem] w-[3.2rem] place-items-center rounded-full bg-[#c00000] text-sm font-extrabold text-white"
          aria-hidden="true">DV</div>
        <h3 class="text-lg font-semibold">Daan Visser</h3>
        <p class="text-sm text-black/55">Full-stack developer</p>
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
