<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>FoodFreaks | Log in</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/logs.css">
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
          <li>Save your favorite recipes</li>
          <li>Build your own recipe collection</li>
          <li>Discover dishes from your favorite creators</li>
        </ul>
      </div>
    </section>

    <section class="auth-panel">
      <div class="auth-card">
        <header class="auth-header">
          <p class="eyebrow">Welcome back</p>
          <h1>Log in</h1>
          <p>Jump back into the kitchen and keep cooking.</p>
        </header>

        <form class="auth-form" action="#" method="post">
          <div class="field">
            <label for="login-email">Email address</label>
            <input id="login-email" type="email" name="email" placeholder="you@example.com" required>
          </div>

          <div class="field">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" name="password" placeholder="Enter your password" required>
          </div>

          <div class="inline-row">
            <label class="checkbox-wrap">
              <input type="checkbox" name="remember">
              <span>Remember me</span>
            </label>
            <a href="#">Forgot password?</a>
          </div>

          <button class="submit-btn" type="submit">Log in</button>
        </form>

        <div class="auth-divider"><span>or continue with</span></div>

        <div class="auth-socials">
          <button type="button" class="social-btn" data-provider="Google">Google</button>
          <button type="button" class="social-btn" data-provider="Apple">Apple</button>
        </div>

        <div class="auth-status" aria-live="polite"></div>

        <p class="auth-footer">
          New here? <a href="signup.php">Create an account</a>
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
    const emailField = document.getElementById('login-email');

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

    
      });
    });
  </script>
</body>

</html>
