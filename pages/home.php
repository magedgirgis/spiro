<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>سبيروسباتس</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" href="home.css" />
    <!-- Font awsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <!-- Template Stylesheet -->
          <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/styleHome.css" rel="stylesheet">
    </head>
  </head>
  <body>
    <div id="header">
      <div class="container">
        <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a href="../index.html" class="navbar-brand">
            <img src="../img/17r.png" alt="" width="50" height="50" />
          </a>
          <button
            type="button"
            class="navbar-toggler ms-auto me-0"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a class="nav-item nav-link" href="home.php">Home</a>
              <a class="nav-item nav-link" href="services.php">Services</a>
              <a class="nav-item nav-link" href="about.php">About</a>
              <a class="nav-item nav-link" href="contact.php">Contact Us</a>
              <a class="nav-item nav-link" href="login.php">Login</a>
              <a class="nav-item nav-link" href="logout.php">logout</a>
            </div>
            <a href="shop2.php" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block"
              >Shop Now</a>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->
        <div class="content">
          <div class="content-text">
              <img id="ilikeimage" src="../img/ilike.png" alt="">
            <p class="ptext">
              التوازن المناسب لأول نوع من شراب الأناناس بالطعم الفريد. النكهة
              تأخذك في مغامرة من الحيوية الاستوائية.
            </p>
          </div>
          <div class="imgss">
            <img id="animateImage" src="../img/1r.png" class="pepsi-can slide" alt="Pepsi Can" />
          </div>
          <div class="social">
            <a href="https://www.facebook.com/SpiroSpathisEG/" target="_blank"
            ><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/spirospathiseg" target="_blank"
            ><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/spirospathiseg/" target="_blank"
            ><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
        <div class="gallery">
          <img
            class="control ananas"
            onclick="changeSlide(0)"
            src="../img/1r.png"
            alt=" التوازن المناسب لأول نوع من شراب الأناناس بالطعم الفريد. النكهة
                تأخذك في مغامرة من الحيوية الاستوائية."
          />
          <img
            class="control purpel"
            onclick="changeSlide(1)"
            src="../img/2r.png"
            alt="الشراب الوحيد المطلوب من نكهة العنب في يوم مشمس أو ليلة دافئة. تحول
                الفاكهة الغريبة الشراب إلى انفجار من النكهات الفريدة."
          />
          <img
            class="control red"
            onclick="changeSlide(2)"
            src="../img/3r.png"
            alt="النكهة المفضلة الكلاسيكية؛ نكهة التفاح بطعم منعش أكثر بكثير. يأخذك
                هذا الشراب في رحلة عبر طريق الذاكرة مع نكهة الجديد."
          />
          <img
            class="control orange"
            onclick="changeSlide(3)"
            src="../img/4r.png"
            alt="الفاكهة المفضلة لديك طوال الوقت الآن في شراب سبيرو سباثيس بنكهة
                اليوسفي مع لمسة حمضية. كمية الحموضة مقابل الحلاوة هو طريقك إلى تحديث
                فوري."
          />
          <img
            class="control soda"
            onclick="changeSlide(4)"
            src="../img/6r.png"
            alt="
مع الكمية المناسبة من الحموضة والحموضة؛ تمنحك نكهة ليمون الصودا الصفعة الطازجة في أي وقت من اليوم
          "
          />
          <!-- New -->

          <img
            class="control lemon"
            onclick="changeSlide(5)"
            src="../img/7r.png"
            alt="
            نكهة الليمون حادة ومنعشة بكل الطرق الصحيحة؛ يضيف الليمون إثارة لكل رشفة. حموضة الليمون مع تأثير الشراب يشكلان تحديدًا مثاليًا.
     "
          />
          <img
            class="control honey"
            onclick="changeSlide(6)"
            src="../img/8r.png"
            alt="الشراب الوحيد المطلوب من نكهة العسل في يوم مشمس أو ليلة دافئة. تحول
     الفاكهة الغريبة الشراب إلى انفجار من النكهات الفريدة."
          />
          <img
            class="control peach"
            onclick="changeSlide(7)"
            src="../img/9r.png"
            alt="
            التأثير الداعم والناعم المنعش للخوخ الذي تحتاجه في أي وقت وأي يوم. نكهة الخوخ عطرية، حلوة وقبل كل شيء لذيذة.
            "
          />

          <img
            class="control orange"
            onclick="changeSlide(9)"
            src="../img/16r.png"
            alt="الشراب الوحيد المطلوب من نكهة البرتقال في يوم مشمس أو ليلة دافئة. تحول
     الفاكهة الغريبة الشراب إلى انفجار من النكهات الفريدة."
          />
          <img
            class="control kewi"
            onclick="changeSlide(10)"
            src="../img/10r.png"
            alt="
            ليس شرابك المعتاد ولكن بالتأكيد أفضل. اندماج الكيوي غير المتوقع مع الشراب هو لأولئك الذين لديهم ذوق رفيع وشغف بكل شيء جديد.
          "
          />
        </div>
      </div>
    </div>

    <!-- start of sections after intro in home -->
    <section class="sec3 container">
      <h2>
        قرن من الإبداع
      </h2>
      <div class="bee">
        <p>
          إشتهر منتج 
          <span>سبيروسباتس</span>
          برمز "الدبانه" الذي استمر إلي وقتنا هذا، ولم يكن 
          <span>سبيروسباتس</span>
           
           يقصد الذبابة بل كان بقصد "النحلة " حيث كان يعمل بالزراعة ومناحل العسل في جزيرة "كيقالونيا" باليونان والتي اشتهر انتاجها أجود أنواع عسل النحل في العالم، ,وذلك جعل هوية العلامة التجارية مميوة وروح المنتج كما هو منذ صنعها وحتى الآن.
        </p>
        <img src="../img/Bee.png" alt="">
      </div>
      <!-- <hr> -->
    </section>
    <section class="sec4 container">
      <img src="../img/21r.png" alt="">
      <p>
        تميزت منتجات 
        <span>سبيروسباتس</span> 
        بروحها الغامرة وتصميمها للشعار بإستخدام النحله، وكان من الذكاء وروح المنافسة إعتماد "سباتس" علي أن تكون منتجاتها من الغازوزة الطبيعية, وغزت منتجات 
        <span>سبيروسباتس</span> 
        الأسواق المصرية
      </p>

    </section>

    <section class="sec5 ">
      <video autoplay muted controls>
        <source src="../media/homeVideo.mp4" type="video/mp4">

      </video>
    </section>
    <section class="sec6 ">
<!-- <img src="../img/p3.jpg" alt="" width="350"> -->
      <p>
         إدعم السوق المصري
      </p>
    </section>




    <footer>
  <!-- Footer Start -->
  <!-- <div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h1>سبيرو سباتس</h1>
                    <img src="../img/Logo-removebg-preview.png" alt="">
                    <p>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Useful Pages</h3>
                    <ul>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="product-detail.php">Product Detail</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login & Register</a></li>
                        <li><a href="my-account.php">My Account</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Quick Links</h3>
                    <ul>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login & Register</a></li>
                        <li><a href="my-account.php">My Account</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Get in Touch</h3>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>123 Cairo, Egypt</p>
                        <p><i class="fa fa-envelope"></i>email@example.com</p>
                        <p><i class="fa fa-phone"></i>+123-456-7890</p>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row payment">
            <div class="col-md-6">
                <div class="payment-method">
                    <p>We Accept:</p>
                    <img src="../img/payment-method.png" alt="Payment Method" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <p>Secured By:</p>
                    <img src="../img/godaddy.svg" alt="Payment Security" />
                    <img src="../img/norton.svg" alt="Payment Security" />
                    <img src="../img/ssl.svg" alt="Payment Security" />
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Footer End -->

<!-- New Footer -->
<div class="container-fluid bg-white footer">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
        <a href="../index.html" class="d-inline-block mb-3">
          <h1 class="text-primary">سبيرو سباتس</h1>
        </a>
        <img src="../img/Logo-removebg-preview.png" alt="">
      </div>
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4">Get In Touch</h5>
        <p>
          <i class="fa fa-map-marker-alt me-3"></i>Building 1183, Block 6 Sayed Zakaria، St.
          Masaken Sheraton, Cairo 
        </p>
        <p><i class="fa fa-phone-alt me-3"></i>+01100122001</p>
        <p><i class="fa fa-envelope me-3"></i>info@spirospathis.com</p>
        <div class="d-flex pt-2">
          <a class="btn btn-square btn-outline-primary me-1" href="https://twitter.com/spirospathiseg" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a class="btn btn-square btn-outline-primary me-1" href="https://www.facebook.com/SpiroSpathisEG/" target="_blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a class="btn btn-square btn-outline-primary me-1" href="https://www.instagram.com/spirospathiseg/" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a class="btn btn-square btn-outline-primary me-1" href="https://www.linkedin.com/company/spiro-spathis/" target="_blank"
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
        <h5 class="mb-4">Our Products</h5>
        <a class="btn btn-link" href="">Apple flavor</a>
        <a class="btn btn-link" href="">Grape flavor</a>
        <a class="btn btn-link" href="">Lemon flavor</a>
        <a class="btn btn-link" href="">Tangerine flavor</a>
        <a class="btn btn-link" href="">Pineapple flavor</a>
        <a class="btn btn-link" href="">Peach flavor</a>
        <a class="btn btn-link" href="">Soda Lemon flavor</a>
        <a class="btn btn-link" href="">Orange Flavor and others...</a>
      </div>
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
        <h5 class="mb-4">Popular Link</h5>
        <a class="btn btn-link" href="../index.html">indexx</a>
        <a class="btn btn-link" href="home.php">Home</a>
        <a class="btn btn-link" href="services.php">Services</a>
        <a class="btn btn-link" href="about.php">About</a>
        <a class="btn btn-link" href="contact.php">Contact Us</a>
        <a class="btn btn-link" href="shop2.php">Shop</a>
        <a class="btn btn-link" href="login.php">Login</a>
      </div>
    </div>
  </div>
</div>

<!-- End New Footer -->
    </footer>
    <script src="slider.js"></script>
  
          <!-- JavaScript Libraries -->
          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
          <script src="lib/easing/easing.min.js"></script>
          <script src="lib/slick/slick.min.js"></script>
  
          
          <!-- Template Javascript -->
          <script src="js/mainF.js"></script>
  </body>
</html>
