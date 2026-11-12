<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/new_style.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>
<body class="bg-[#006E69] font-[k2d] text-white">

    <!-- Navigatiebar -->
    <nav class="flex justify-center items-center text-shadow-[1px_1px_black] h-[90px] bg-gray opacity-300 fixed top-0 w-[100%] z-10 font-[k2d] text-xl">
        <a class="absolute left-4 text-5xl font-[bebas] text-[#FF8400]" href="index.php">FoodFreaks</a>

        <div class="w-[600px] flex justify-around text-white">
            <a href="index.php">Main page</a>
            <a href="overzicht.php">Recipes</a>
            <a href="about.php">About us</a>
            <a href="contact.php">Contact us</a>
        </div>
        <div class="absolute right-4 text-shadow-none px-4 py-2 bg-[#FFD27A] rounded-4xl" href="login.php">Sign up / Log in</div>
    </nav>

    <!-- "De recepten" -->
    <div class="flex w-[100%] h-[250px] bg-[#A2C9CD] justify-center items-center">
        <span class="font-[bebas] text-8xl mt-30 text-[#C20000]">De recepten</span>
    </div>

    <!-- Bovenkant pagina -->
    <hr class="w-[80%] text-white mx-auto mt-6">

    <div class="w-[80%] mx-auto bg-green-300 h-[inherit] flex justify-between">

        <!-- Auteurnaam -->
        <div class="w-[20%] items-center text-left flex justify-start gap-3">
            <img src="../images/publish.png " class="max-w-[60px] bg-green-600">
            <span class="text-4xl font-[k2d]"><b>Gepost door: bober</b> </u></span>
        </div>

        <!-- Titel recept -->
        <div class="bg-red-300 w-[600px] text-center">
            <span class="text-8xl font-[bebas] text-black">BUDGET-GOULASH</span>
        </div>

        <!-- Postdatum -->
        <div class="w-[20%] items-center text-right flex justify-end gap-3">
            <span class="text-4xl font-[k2d]"><b>Postdatum: bober</b> </u></span>
            <img src="../images/date.png" class="max-w-[60px] bg-green-600">
        </div>

    </div>

    <!-- Middeldetails -->
    <div class=" w-[80%] bg-red-300 h-[800px] mx-auto mt-30">
        <!-- Receptinfo + foto -->
        <div class="flex justify-around">
            <!-- Foto + reviews gemiddelde -->
            <div>
                <!-- Afbeelding -->
                <img src="../images/placeholder2.png" class="max-h-[500px] max-w-[100%] rounded-2xl border-2 border-black">

                <!-- Gemiddelde rating -->
                <div class="w-[80%] h-59 mx-auto mt-4 bg-[#00918E]">
                    <span class="bg-green-600 font-[bebas] text-4xl">Reviewers zeggen dit:</span>
                </div>
            </div>


            <!-- Gegevens kooktijd, porties, allergieen, tags -->
            <div class="w-[40%] bg-yellow-300 text-5xl flex flex-col gap-2">

                <div class="flex items-center gap-3"><img src="../images/duration.png" class="h-[35px]"><b>Kooktijd:</b> ~3 min</div>
                <div class="flex items-center gap-3"><img src="../images/porties.png" class="h-[35px]"><b>Porties:</b> 67</div>

                <!-- Allergieën lijst -->
                <div class="flex items-center gap-3 text-[#C20000]"><img src="../images/allergieen.png" class="h-[35px]"><b><u>Allergieën:</u></b></div>

                <div class="flex gap-3 w-[100%] h-60 bg-[#00918E] mt-5 rounded-lg overflow-y-auto p-3 flex-wrap">
                    <!-- Allgerieen item -->
                    <div class="flex justify-between items-center w-fit min-w-[60px] h-[35px] px-3 text-center rounded-lg bg-[#FFD700] text-xl">
                        <div class="w-fit flex">
                            <span>1</span>
                        </div>
                        <img src="../images/geelster_rounded.png" class="w-5 h-5">
                    </div>

                    <div class="w-fit min-w-[60px] h-[35px] px-3 text-center rounded-lg bg-[#FFD700] text-xl">
                        <div class="w-[100%] h-[100%]">
                            EI
                            <div class="relative text-lg text-[#C20000] ml-9 mt-[-30px]">!</div>
                        </div>
                    </div>
                </div>

                <!-- Tags lijst -->
                <div class="flex items-center gap-3"><img src="../images/list.png" class="h-[35px]"><b>Tags:</b></div>

                <div class="flex gap-3 w-[100%] h-60 bg-[#00918E] mt-5 rounded-lg overflow-y-auto p-3 flex-wrap">
                    <!-- Tag item -->
                    <div class="w-fit min-w-[60px] h-[35px] px-3 text-center rounded-lg bg-[#FFD700] text-xl">
                        <div class="w-[100%] h-[100%]">
                            EI
                            <div class="relative text-lg text-[#C20000] ml-9 mt-[-30px]">!</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>



</body>
</html>