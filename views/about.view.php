<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | About us</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/about.css">
</head>

<body class="about-body">
  <nav class="about-nav" id="nav">
    <a class="logo" href="index.php">FoodFreaks</a>
    <ul class="links">
      <li><a href="#">Recipes</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="about.php" aria-current="page">About us</a></li>
      <li><a href="contact.php">Contact us</a></li>
    </ul>
    <a class="cta" href="login.php">Sign up / Log in</a>
    <button class="menu" id="menu" aria-expanded="false" aria-controls="nav">Menu</button>
  </nav>

  <main class="about-main">
    <header class="about-header">
      <p class="about-eyebrow">The developers behind FoodFreaks</p>
      <h1>Built by a team<br>that loves to create.</h1>
      <p class="about-intro">We are the developers behind FoodFreaks. We designed and built this website to make
        discovering recipes feel simple, welcoming and enjoyable.</p>
      <a class="stories-link" href="index.php">Explore our kitchen <span aria-hidden="true">→</span></a>
    </header>

    <section class="team-grid" aria-label="Meet the FoodFreaks team">
      <article class="team-card">
        <div class="card-content">
          <div class="avatar avatar-teal" aria-hidden="true">SJ</div>
          <h2>Sarah Janssen</h2>
          <p class="role">Front-end developer</p>
          <p class="quote">“I turned our ideas into a clear and inviting interface that makes FoodFreaks easy to explore.”</p>
        </div>
        <div class="card-number">01</div>
      </article>

      <article class="team-card">
        <div class="card-content">
          <div class="avatar avatar-butter" aria-hidden="true">LM</div>
          <h2>Lucas Meijer</h2>
          <p class="role">Back-end developer</p>
          <p class="quote">“I built the structure behind the website so every part of the experience works smoothly.”</p>
        </div>
        <div class="card-number">02</div>
      </article>

      <article class="team-card">
        <div class="card-content">
          <div class="avatar avatar-coral" aria-hidden="true">NA</div>
          <h2>Nora Ahmed</h2>
          <p class="role">UI/UX designer</p>
          <p class="quote">“I focused on making every page feel friendly, useful and easy to understand.”</p>
        </div>
        <div class="card-number">03</div>
      </article>

      <article class="team-card">
        <div class="card-content">
          <div class="avatar avatar-lavender" aria-hidden="true">DV</div>
          <h2>Daan Visser</h2>
          <p class="role">Full-stack developer</p>
          <p class="quote">“I connected the design and functionality to bring the FoodFreaks idea to life.”</p>
        </div>
        <div class="card-number">04</div>
      </article>
    </section>
  </main>

  <script src="js/script.js" defer></script>
</body>

</html>
