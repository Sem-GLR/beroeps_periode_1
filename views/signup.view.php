<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Sign up</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/logs.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="auth-body">
  <button class="theme-switch" type="button" aria-label="Toggle dark mode">
    <img src="media/darkmode.svg" alt="Dark mode icon" aria-hidden="true">
  </button>

  <a class="back-link" href="index.php" aria-label="Go back to homepage">← Back</a>

  <main class="auth-shell">
    <section class="auth-visual" aria-label="FoodFreaks introduction">
      <a class="auth-brand" href="index.php">FoodFreaks</a>
      <div class="visual-content">
        <p class="eyebrow">Fresh ideas. Dinner wins.</p>
        <h2>Cook something worth talking about.</h2>
        <ul class="benefits">
          <li>Save recipes you want to cook again</li>
          <li>Follow creators who inspire your next meal</li>
          <li>Build a kitchen routine you actually enjoy</li>
        </ul>
      </div>
    </section>

    <section class="auth-panel">
      <div class="auth-card">
        <header class="auth-header">
          <p class="eyebrow">Join the table</p>
          <h1>Create account</h1>
          <p>Sign up to save recipes, collect favorites, and cook with confidence.</p>
        </header>

        <form class="auth-form" action="#" method="post">
          <div class="field">
            <label for="signup-name">Full name</label>
            <input id="signup-name" type="text" name="name" placeholder="Your name" required>
          </div>

          <div class="field">
            <label for="signup-email">Email address</label>
            <input id="signup-email" type="email" name="email" placeholder="you@example.com" required>
          </div>

          <div class="field">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" name="password" placeholder="Create a password" required>
          </div>

          <div class="field">
            <label for="signup-confirm">Confirm password</label>
            <input id="signup-confirm" type="password" name="confirm-password" placeholder="Confirm your password" required>
          </div>

          <button class="submit-btn" type="submit">Create account</button>
        </form>

        <div class="auth-divider"><span>or continue with</span></div>

        <div class="auth-socials">
          <button type="button" class="social-btn" data-provider="Google">Google</button>
          <button type="button" class="social-btn" data-provider="Apple">Apple</button>
        </div>

        <div class="auth-status" aria-live="polite"></div>

        <p class="auth-footer">
          Already have an account? <a href="login.php">Log in</a>
        </p>
      </div>
    </section>
  </main>

  <script>
    const body = document.body;
    const themeButton = document.querySelector('.theme-switch');
    const savedTheme = localStorage.getItem('foodfreaks-theme');
    const socialButtons = document.querySelectorAll('.social-btn');
    const statusBox = document.querySelector('.auth-status');
    const emailField = document.getElementById('signup-email');
    const nameField = document.getElementById('signup-name');

    if (savedTheme === 'light') {
      body.classList.add('light');
    }

    themeButton?.addEventListener('click', () => {
      const isLight = body.classList.toggle('light');
      localStorage.setItem('foodfreaks-theme', isLight ? 'light' : 'dark');
    });

    socialButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const provider = button.dataset.provider;
        const email = provider === 'Google' ? 'hello@gmail.com' : 'hello@apple.com';

        socialButtons.forEach((item) => {
          item.classList.toggle('is-connected', item === button);
        });

        if (emailField) {
          emailField.value = email;
        }

        if (nameField) {
          nameField.value = provider === 'Google' ? 'Google User' : 'Apple User';
        }

        if (statusBox) {
          statusBox.textContent = `${provider} connected successfully (demo mode).`;
          statusBox.style.color = '#006C68';
        }
      });
    });
  </script>
</body>

</html>
