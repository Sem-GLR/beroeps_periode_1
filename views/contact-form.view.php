<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Contact form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/contact-form.css">
</head>

<body class="contact-body">
  <main class="contact-form-main">
    <a class="form-back" href="index.php">← Back to FoodFreaks</a>
    <section class="contact-form-card">
      <p class="contact-eyebrow">FoodFreaks contact</p>
      <h1>Tell us how we can help</h1>
      <p class="form-intro">Fill in the form and our team will get back to you as soon as possible.</p>
      <?php if (filter_input(INPUT_GET, 'sent', FILTER_VALIDATE_BOOLEAN)): ?>
        <p class="form-status form-status-success" role="status">Thanks! Your message has been sent.</p>
      <?php endif; ?>

      <form class="contact-form" action="send-email.php" method="post">
            <div class="form-row">
                <div class="form-field">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text"
                           autocomplete="name" required>
                </div>

                <div class="form-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email"
                           autocomplete="email" required>
                </div>
            </div>

            <div class="form-field">
                <label for="topic">What can we help with?</label>
                <select id="topic" name="topic">
                    <option value="Recipe question">Recipe question</option>
                    <option value="Account help">Account help</option>
                    <option value="Feedback">Feedback</option>
                </select>
            </div>

            <div class="form-field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6"
                          required></textarea>
            </div>

            <button class="form-submit" type="submit">
                Send message
            </button>
      </form>
    </section>
  </main>

  <script src="js/script.js" defer></script>
</body>

</html>
