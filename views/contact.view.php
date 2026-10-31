<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Contact</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
</head>

<body class="contact-body">
  <nav class="contact-nav" id="nav">
    <a class="logo" href="index.php">FoodFreaks</a>
    <ul class="links">
      <li><a href="#">Recipes</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="contact.php" aria-current="page">Contact us</a></li>
    </ul>
    <a class="cta" href="login.php">Sign up / Log in</a>
    <button class="menu" id="menu" aria-expanded="false" aria-controls="nav">Menu</button>
  </nav>

  <main class="contact-main">
    <header class="contact-header">
      <p class="contact-eyebrow">We would love to hear from you</p>
      <h1>Talk to our food lovers</h1>
      <p>Have questions about recipes, collaborations, or how FoodFreaks works? We’re always happy to chat!</p>
    </header>

    <section class="contact-grid" id="contact-options" aria-label="Ways to contact FoodFreaks">
      <article class="contact-card">
        <div class="contact-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
            <path d="M5 5.5h14A1.5 1.5 0 0 1 20.5 7v9A1.5 1.5 0 0 1 19 17.5H9l-4.5 3V7A1.5 1.5 0 0 1 6 5.5Z" />
            <path d="M8 10h8M8 13h5" />
          </svg>
        </div>
        <h2>Chat with us</h2>
        <p>Ask us anything about your next meal.</p>
        <a href="contact-form.php?topic=chat">Start a conversation</a>
      </article>

      <article class="contact-card">
        <div class="contact-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
            <path d="M4.5 11.5a7.5 7.5 0 0 1 15 0v5A2.5 2.5 0 0 1 17 19h-1v-6h1a2.5 2.5 0 0 1 2.5 2.5M4.5 16.5A2.5 2.5 0 0 1 7 14h1v5H7a2.5 2.5 0 0 1-2.5-2.5Z" />
            <path d="M16 19c-.6 1-1.6 1.5-3 1.5h-1" />
          </svg>
        </div>
        <h2>Need some help?</h2>
        <p>We’re here to help with your FoodFreaks experience.</p>
        <a href="contact-form.php?topic=help">Get support</a>
      </article>

    </section>
  </main>

  <script src="js/script.js" defer></script>
</body>

</html>
