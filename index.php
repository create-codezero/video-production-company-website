<?php
session_start();
include_once './connect/connectDb/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shabd Production</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas___menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./about/">About</a></li>
                <li><a href="./faq/">FAQ</a></li>
                <li><a href="./jhalak/">Jhalak</a></li>
                <li><a href="./projects/">Projects</a></li>
                <li><a href="./contact/">Contact</a></li>
                <li><a href="./blog">Blog</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas___auth">
            <ul>
                <li><a href="#"><span class="fa fa-user"></span> Admin </a></li>
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
    <header class="header-section">
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
                                <li><a href="./admin-panel/"><span class="fa fa-user"></span> Admin </a></li>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header___menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about/">About</a></li>
                            <li><a href="./faq/">FAQ</a></li>
                            <li><a href="./jhalak/">Jhalak</a></li>
                            <li><a href="./projects/">Projects</a></li>
                            <li><a href="./contact/">Contact</a></li>
                            <li><a href="./blog">Blog</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero___slider owl-carousel">
            <div class="hero___item set-bg" data-setbg="img/hero/hero-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero___text">
                                <h5>Starting At Only $ 2.8/month</h5>
                                <h2>Welcome to the best<br /> hosting company</h2>
                                <a href="#" class="primary-btn">Get started now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero___img">
                                <img src="img/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero___item set-bg" data-setbg="img/hero/hero-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero___text">
                                <h5>Starting At Only $ 2.8/month</h5>
                                <h2>Welcome to the best<br /> hosting company</h2>
                                <a href="#" class="primary-btn">Get started now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero___img">
                                <img src="img/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Description Section Begin -->
    <section class="description spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="register___text">
                        <div class="section-title">
                            <h3>Register Your Domain Now!</h3>
                        </div>
                        <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>

            <div class="we-worked-with row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="register___text">
                        <div class="section-title">
                            <h3>We Worked With</h3>
                        </div>
                    </div>
                </div>
                <div class="brand___slider container owl-carousel row">
                    <?php
                    $q1 = "SELECT * FROM `shabd_brands` ORDER BY `brandId` DESC LIMIT 0,18";
                    $fireq1 = mysqli_query($link, $q1);

                    if (mysqli_num_rows($fireq1) > 0) {
                        while ($q1Data = mysqli_fetch_assoc($fireq1)) {
                    ?>

                            <div class="brand___item" id="<?php echo $q1Data['brandName']; ?>">
                                <img src="./img/brands/<?php echo $q1Data['brandImage']; ?>">
                            </div>

                    <?php
                        }
                    }

                    ?>

                </div>

            </div>
        </div>
    </section>

    <!-- Description End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Choose the right hosting solution</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                $q2 = "SELECT * FROM `shabd_services` ORDER BY `serviceId` DESC";
                $fireq2 = mysqli_query($link, $q2);

                if (mysqli_num_rows($fireq2) > 0) {
                    while ($q2Data = mysqli_fetch_assoc($fireq2)) {
                ?>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="services___item">
                                <h5><?php echo $q2Data['serviceName']; ?></h5>
                                <span><?php echo $q2Data['serviceStartAt']; ?></span>
                                <p><?php echo $q2Data['serviceDescription']; ?></p>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Achievement Section Begin -->
    <section class="achievement-section set-bg spad" data-setbg="img/achievement-bg.png">
        <div class="container">
            <div class="row">
                <?php
                $q3 = "SELECT * FROM `shabd_achievement` ORDER BY `achievementId` DESC LIMIT 1";
                $fireq3 = mysqli_query($link, $q3);

                if (mysqli_num_rows($fireq3) > 0) {
                    while ($q3Data = mysqli_fetch_assoc($fireq3)) {
                        $i = 1;
                        while ($i <= 4) {
                            $currentNameVal = "achievement" . $i . "Title";
                            $currentNumVal = "achievement" . $i . "Num";
                ?>

                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="achievement___item">
                                    <span class="fa fa-user-o"></span>
                                    <h2 class="achieve-counter"><?php echo $q3Data[$currentNumVal]; ?></h2>
                                    <p><?php echo $q3Data[$currentNameVal]; ?></p>
                                </div>
                            </div>
                <?php
                            $i++;
                        }
                    }
                }

                ?>
            </div>
        </div>
    </section>
    <!-- Achievement Section End -->

    <!-- Work Section Begin -->
    <section class="work-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>HOW TO BUILD YOUR WEBSITE ONLINE TODAY?</h3>
                    </div>
                    <div class="work___text">
                        <div class="row">

                            <?php
                            $q4 = "SELECT * FROM `shabd_winning_services` ORDER BY `id` DESC LIMIT 2";
                            $fireq4 = mysqli_query($link, $q4);

                            if (mysqli_num_rows($fireq4) > 0) {
                                while ($q4Data = mysqli_fetch_assoc($fireq4)) {
                            ?>
                                    <div class="col-lg-6">
                                        <div class="work___item">
                                            <i class="fa fa-desktop"></i>
                                            <span><?php echo $q4Data['subTitle']; ?></span>
                                            <h3><?php echo $q4Data['title']; ?></h3>
                                            <p><?php echo $q4Data['description']; ?></p>
                                            <a href="<?php echo $q4Data['buttonLink']; ?>" class="primary-btn"><?php echo $q4Data['buttonText']; ?></a>
                                        </div>
                                    </div>
                            <?php
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Choose Plan Section Begin -->
    <section class="choose-plan-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="img/choose-plan.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="plan___text">
                        <h3>up to 70% discount with free domain name registration included!</h3>
                        <ul>
                            <li><span class="fa fa-check"></span> FREE Domain Name</li>
                            <li><span class="fa fa-check"></span> FREE Email Address</li>
                            <li><span class="fa fa-check"></span> Plently of disk space</li>
                            <li><span class="fa fa-check"></span> FREE Website Bullder</li>
                            <li><span class="fa fa-check"></span> FREE Marketing Tools</li>
                            <li><span class="fa fa-check"></span> 1-Click WordPress Install</li>
                        </ul>
                        <a href="#" class="primary-btn">Get start now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Plan Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Our Client say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial___slider owl-carousel">
                    <?php
                    $q5 = "SELECT * FROM `shabd_testimonial` ORDER BY `testimonialId` DESC LIMIT 15";
                    $fireq5 = mysqli_query($link, $q5);

                    if (mysqli_num_rows($fireq5) > 0) {
                        while ($q5Data = mysqli_fetch_assoc($fireq5)) {
                    ?>
                            <div class="col-lg-4">
                                <div class="testimonial___item">
                                    <img src="img/testimonial/<?php echo $q5Data['testimonialProfile']; ?>" alt="">
                                    <h5><?php echo $q5Data['testimonialName']; ?></h5>
                                    <span><?php echo $q5Data['testimonialPosition']; ?></span>
                                    <p><?php echo $q5Data['testimonialDescription']; ?></p>
                                    <div class="testimonial___rating">
                                        <?php
                                        $j = 1;
                                        while ($j <= 5) {
                                            if ($j <= $q5Data['testimonialRating']) {
                                                echo '<i class="fa fa-star"></i>';
                                            } else {
                                                echo '<i class="fa-regular fa-star"></i>';
                                            }
                                            $j++;
                                        }
                                        ?>
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
    </section>
    <!-- Testimonial Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="footer___top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer___top-call">
                            <h5>Have Any Query? Call us</h5>
                            <h2>+1 175 946 2316 096</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer___top-auth">
                            <h5>Start Working with us Now!</h5>
                            <a href="./contact/" class="primary-btn sign-up">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer___text set-bg" data-setbg="img/footer-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer___text-about">
                            <div class="footer___logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida viverra maecen
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
                                <li><span class="fa fa-map-marker"></span> 500 South Main Street Los Angeles,<br />
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
            <a href="./contact/">
                <img src="./img/side-contact-us-btn.png">
            </a>
        </div>
    </div>
    <!-- Side Contact Us button End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>