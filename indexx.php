<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="pages/lib/animate/animate.min.css" rel="stylesheet" /> -->
    <!-- <link href="pages/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="indexHero.css" /> -->
    <link rel="stylesheet" href="index.css" />
    <title>Spiro Spathis</title>
</head>

<body>
    <div class=""></div>
    <nav class="navbar flex  px-4 justify-between">
        <a href="indexx.php" class="logoLeft flex items-center gap-4">
            <img src="img/Logo-removebg-preview.png" alt="logo" class="img logoandanimate" />
        </a>
        <div class="flex gap-4">
            
            <!-- <h3 class="titleAnimate">
                <canvas id="canvas"></canvas>
                <script src="main.js"></script>
            </h3> -->
        </div>
        <div class="menu flex gap-4 items-center">
            <a href="pages/home.php">Home</a>
            <a href="pages/services.php">Services</a>
            <a href="pages/about.php">About</a>
            <a href="pages/contact.php">Contact Us</a>
            <a href="pages/shop2.php">Shop</a>
            <a href="pages/login.php">Login</a>
            <lable class="switch" id="switchlamb" >
                <div class="round">
                    <input name="onoff" id="onoff" type="checkbox" onclick="toggleImage()">
                    <div class="back">
                    <label for="onoff" class="but">
                        <span  class="on">0</span>
                        <span  class="off">I</span>
                    </label>
                </div>
                </div>
              </lable>
        </div>
        <div class="sidemenu" onclick="toggleSidemenuLinks()">&#9776;</div>
    </nav>
    <div class="sidemenuLinks flex flex-col gap-4">
        <a href="pages/home.php">Home</a>
        <a href="pages/services.php">Services</a>
        <a href="pages/about.php">About</a>
        <a href="pages/shop.php">Shop</a>
        <a href="pages/contact.php">Contact Us</a>
        <a href="pages/login.php">Login</a>
    </div>
    <!-- Hero Section -->
    <section class="hero sec1 flex items-center justify-between">
        <!-- Start of Image -->
        <div class="heroImage">

        </div>
        <div class="lamp-container">
            <img id="lamp" src="img/lamp.png" class="lamp" alt="">
            <img id="light" src="img/light.png" class="light" alt="">
            <img src="img/bk2-r.png" class="bottle" alt="">
            <!-- <img src="img/11r.png" class="bottle" alt=""> -->
        </div>
        <!-- End of Image -->
        <!-- </main> -->
        <h1 class="h1text text-center">
            <!-- 1 -->
            <!-- من هنا وجاي
            <br /> سبيرو سباتس معانا في كل مكان -->
            <!-- 2 -->
            <!-- من زمان وكل لمة ليها كبير
            <br>
            بس السنادي سبيروسباتس هي كبير كل لمة -->
            <!-- 3 -->
            من هنا وجاي مش هتلاقي حاجة معاك زي
            <br>
            سبيروسباتس اختار الطعم اللي تحبه
            <!-- <br> -->
             وسيب الباقي علينا
        </h1>

        <!-- <img src="img/hero5.png" alt="" class="" width=/> -->
    </section>
    <!-- Footer -->

    <script src="script.js"></script>
    <script src="title.js"></script>
</body>

</html>