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

  <main class="w-[760px] mt-40 mx-auto">
      <?php if ($_SERVER["HTTP_REFERER"] == './contact.php') { ?>
    <?= '<a class="text-white font-bold underline" href="contact.php">← Terug</a>' ?>
      <?php } ?>
    <section class="contact-form-card bg-white rounded-lg mt-3 px-5 py-2 shadow-2xl">
      <p class="text-black text-xl font-[bebas] text-center">FoodFreaks contact</p>
      <h1 class="text-5xl font-[bebas] text-center text-[#FF8400]">Hoe kunnen wij helpen?</h1>
      <p class="text-center mb-5 text-[#000000a6]">Vul deze form in en wij komen zo snel mogelijk op je terug!</p>

      <form action="configs/contact-form_config.php" method="post">
            <div class="text-[#007a75]">
                <div class="flex flex-col">
                    <label for="name" class="text-black font-bold">(Gebruikers)naam</label>
                    <input required id="name" name="name" class="mt-1 mb-4 text-black h-12 rounded-lg border-[#079996bf] border-1 px-[14.4px] py-[13px] focus:ring-3 ring-[#07999666]" type="text">
                </div>

                <div class="flex flex-col">
                    <label for="email" class="text-black font-bold">E-mail adres</label>
                    <input required id="email" name="email" class="mt-1 text-black h-12 rounded-lg border-[#079996bf] border-1 mb-3 px-[14.4px] py-[13px] focus:ring-3 ring-[#07999666]" type="email">
                </div>
            </div>

            <div>
                <label for="hulp" class="text-black font-bold">Waarmee heeft u hulp nodig?</label><br>
                <select required name="hulp" id="hulp" class="mt-1 mb-3 text-black w-[100%] h-12 rounded-lg border-[#079996bf] border-1 px-[14.4px] py-[13px] focus:ring-3 ring-[#07999666]">
                    <option value="Recipe question">Vraag</option>
                    <option value="Account help">Accounthulp</option>
                    <option value="Feedback">Feedback</option>
                </select>
            </div>

            <div>
                <label for="bericht" class="text-black font-bold">Waarmee heeft u hulp nodig?</label><br>
                <textarea id="bericht" name="bericht" rows="6" class="w-[100%] mt-1 rounded-lg border-[#079996bf] border-1 focus:ring-3 px-[14.4px] py-[13px] ring-[#07999666]"
                          required></textarea>
            </div>
          <?php if (!empty($_SESSION["user"]) || isset($_SESSION["user"])) { ?>
          <?= '<input type="hidden" value="' . $_SESSION['id'] . '" name="user_id">' ?>
          <?php } ?>

          <input type="submit" value="Contact opnemen" class="cursor-pointer underline w-[160px] py-2.5 mt-10 mx-auto h-[50px] text-white text-center rounded-4xl text-md bg-[#FF8400]"><a href="contact-form.php"></a></input>
      </form>
    </section>
  </main>
</body>

</html>
