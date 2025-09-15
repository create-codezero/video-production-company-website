<?php
session_start();
include_once '../connect/connectDb/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>FAQ | Shabd Production</title>

     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">

     <!-- Css Styles -->
     <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
     <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
     <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
     <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
     <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
     <!-- Page Preloder -->
     <div id="preloder">
          <div class="loader"></div>
     </div>

     <!-- Offcanvas Menu Begin -->
     <div class="offcanvas___menu___overlay"></div>
     <div class="offcanvas___menu___wrapper">
          <div class="canvas___close">
               <span class="fa fa-times-circle-o"></span>
          </div>
          <div class="offcanvas___logo">
               <a href="../"><img src="../img/logo.png" alt=""></a>
          </div>
          <nav class="offcanvas___menu mobile-menu">
               <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="../about/">About</a></li>
                    <li class="active"><a href="./">FAQ</a></li>
                    <li><a href="../jhalak/">Jhalak</a></li>
                    <li><a href="../projects/">Projects</a></li>
                    <li><a href="../contact/">Contact</a></li>
                    <li><a href="../blog">Blog</a></li>
               </ul>
          </nav>
          <div id="mobile-menu-wrap"></div>
          <div class="offcanvas___auth">
               <ul>
                    <li><a href="../admin-panel/"><span class="fa fa-user"></span> Admin</a></li>
               </ul>
          </div>
          <div class="offcanvas___info">
               <ul>
                    <li><span class="icon_phone"></span> +1 123-456-7890</li>
                    <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
               </ul>
          </div>
     </div>
     <!-- Offcanvas Menu End -->

     <!-- Header Section Begin -->
     <header class="header-section header-normal">
          <div class="header___info">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6">
                              <div class="header___info-left">
                                   <ul>
                                        <li><span class="icon_phone"></span> +1 123-456-7890</li>
                                        <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
                                   </ul>
                              </div>
                         </div>
                         <div class="col-lg-6 col-md-6">
                              <div class="header___info-right">
                                   <ul>
                                        <li><a href="../admin-panel/"><span class="fa fa-user"></span> Admin</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <div class="row">
                    <div class="col-lg-3 col-md-3">
                         <div class="header___logo">
                              <a href="../"><img src="../img/logo.png" alt=""></a>
                         </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                         <nav class="header___menu">
                              <ul>
                                   <li><a href="../">Home</a></li>
                                   <li><a href="../about/">About</a></li>
                                   <li class="active"><a href="./">FAQ</a></li>
                                   <li><a href="../jhalak/">Jhalak</a></li>
                                   <li><a href="../projects/">Projects</a></li>
                                   <li><a href="../contact/">Contact</a></li>
                                   <li><a href="../blog">Blog</a></li>
                              </ul>
                         </nav>
                    </div>
               </div>
               <div class="canvas___open">
                    <span class="fa fa-bars"></span>
               </div>
          </div>
     </header>
     <!-- Header End -->

     <!-- Breadcrumb Begin -->
     <div class="breadcrumb-section">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="breadcrumb___option">
                              <a href="../"><span class="fa fa-home"></span> Home</a>
                              <span>fAQ</span>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- Breadcrumb End -->

     <!-- Question Section Begin -->
     <section class="question-section spad">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="section-title">
                              <h3>Have a questions?</h3>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                         <div class="question___accordin">
                              <div class="accordion" id="accordionExample">
                                   <?php
                                   $q1 = "SELECT * FROM `shabd_faq`";
                                   $fireq1 = mysqli_query($link, $q1);

                                   if (mysqli_num_rows($fireq1) > 0) {
                                        while ($q1Data = mysqli_fetch_assoc($fireq1)) {
                                   ?>
                                             <div class="card">
                                                  <div class="card-heading">
                                                       <a data-toggle="collapse" data-target="#faq<?php echo $q1Data['faqId']; ?>">
                                                            <?php echo $q1Data['faqQuestion']; ?>
                                                       </a>
                                                  </div>
                                                  <div id="faq<?php echo $q1Data['faqId']; ?>" class="collapse" data-parent="#accordionExample">
                                                       <div class="card-body">
                                                            <p><?php echo $q1Data['faqAnswer']; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                   <?php
                                        }
                                   }
                                   ?>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-6">
                         <form action="../php/askQuestion.php" class="question-form" method="POST">
                              <input type="text" placeholder="Name" name="name">
                              <input type="text" placeholder="Email" name="email">
                              <textarea placeholder="Question" name="question"></textarea>
                              <button type="submit" class="site-btn" name="ask">Send question</button>
                         </form>
                    </div>
               </div>
          </div>
     </section>
     <!-- Question Section End -->

     <!-- Footer Section Begin -->
     <footer class="footer-section">
          <div class="footer___top">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6">
                              <div class="footer___top-call">
                                   <h5>Need Help? Call us</h5>
                                   <h2>+1 175 946 2316 096</h2>
                              </div>
                         </div>
                         <div class="col-lg-6 col-md-6">
                              <div class="footer___top-auth">
                                   <h5>Join Now And Have Free Month Of Deluxe Hosting</h5>
                                   <a href="#" class="primary-btn">Log in</a>
                                   <a href="#" class="primary-btn sign-up">Sign Up</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="footer___text set-bg" data-setbg="../img/footer-bg.png">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="footer___text-about">
                                   <div class="footer___logo">
                                        <a href="./index.html"><img src="../img/logo.png" alt=""></a>
                                   </div>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida
                                        viverra maecen
                                        lacus vel facilisis. </p>
                                   <div class="footer___social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-2 col-md-6 col-sm-6">
                              <div class="footer___text-widget">
                                   <h5>Company</h5>
                                   <ul>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Press & Media</a></li>
                                        <li><a href="#">News / Blogs</a></li>
                                        <li><a href="#">Careers</a></li>
                                   </ul>
                              </div>
                         </div>
                         <div class="col-lg-2 col-md-6 col-sm-6">
                              <div class="footer___text-widget">
                                   <h5>Hosting</h5>
                                   <ul>
                                        <li><a href="#">Web Hosting</a></li>
                                        <li><a href="#">Reseller Hosting</a></li>
                                        <li><a href="#">VPS Hosting</a></li>
                                        <li><a href="#">Dedicated Servers</a></li>
                                        <li><a href="#">Cloud Hosting</a></li>
                                   </ul>
                              </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="footer___text-widget">
                                   <h5>cONTACT US</h5>
                                   <ul class="footer___widget-info">
                                        <li><span class="fa fa-map-marker"></span> 500 South Main Street Los
                                             Angeles,<br />
                                             ZZ-96110 USA</li>
                                        <li><span class="fa fa-mobile"></span> 125-711-811 | 125-668-886</li>
                                        <li><span class="fa fa-headphones"></span> Support.hosting@gmail.com</li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="footer___text-copyright">
                         <p>
                              Copyright &copy;<script>
                                   document.write(new Date().getFullYear());
                              </script> All rights reserved | This website is developed by <a href="https://www.yastiwari.com/">Yas Tiwari.</a>
                         </p>
                    </div>
               </div>
          </div>
     </footer>
     <!-- Footer Section End -->

     <!-- Side Contact Us button Begin -->
     <div class="fixed-contact-us">
          <div class="fixed-contact-us-btn">
               <a href="../contact/">
                    <img src="../img/side-contact-us-btn.png">
               </a>
          </div>
     </div>
     <!-- Side Contact Us button End -->

     <!-- Js Plugins -->
     <script src="../js/jquery-3.3.1.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/jquery.slicknav.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/main.js"></script>
</body>

</html>