<?php
session_start();
require_once '../connect/connectDb/config.php';
if (!isset($_SESSION['admin-panel'])) {
     header('location: ./admin-login.php');
}

if (isset($_SESSION['adminDPage']) && !empty($_SESSION['adminDPage'])) {
     $content = $_SESSION['adminDPage'];
} else {
     $content = "Home";
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="shabd">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Panel</title>
     <link rel="stylesheet" href="../css/<?php echo $cssfile; ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

     <div class="header-box pos-fixed z-1 w-100per">
          <div class="header">
               <div class="branding">
                    <a href="javascript:void(0)" onclick="clickOn('side-menu')"><img src="../img/menu.png" alt="Logo" style="max-width: 50px;" class="menu"></a>
               </div>
               <div class="header-menu flex flex-y-center">
                    <a class="btn btn-gra-blue" href="./actions/Signout.php" title="Sign In">
                         Sign Out
                    </a>
               </div>
          </div>
     </div>
     <div class="block" style="height: 70px;"></div>

     <!-- CONTENT WILL LOAD IN THIS DIV -->
     <div class="container d-flex-center" style="flex-direction:column;" id="Content">
          <!-- CONTENT WILL LOAD UPPER DIV -->
     </div>

     <div class="side-menu bg-white h-100vh pos-fixed none" id="side-menu">

          <div class="menu m-t-80">
               <ul>
                    <p class="normal-tx fw-500 fc-dark-blue">Your Menu.</p>
                    <div class="bg-primary block m-10" style="height: 2px;"></div>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Home')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Home"><i class="fas fa-home"></i> Home </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Service')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Service"><i class="fa fa-cart-plus" aria-hidden="true"></i> Service </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Projects')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Projects"> <i class="fas fa-user-alt"></i> Projects </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Testimonial')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Testimonial"> <i class="fa fa-microphone" aria-hidden="true"></i> Testimonial </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Gallery')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Gallery"> <i class="fas fa-images    "></i> Gallery </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Faq')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Faq"> <i class="fa fa-question" aria-hidden="true"></i> FAQ </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('UserAsked')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Faq"> <i class="fa fa-question" aria-hidden="true"></i> User Query </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Brand')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Brand"> <i class="fa fa-building" aria-hidden="true"></i> Brand </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Winning-Service')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Winning-Service"> <i class="fa fa-check" aria-hidden="true"></i> Winning Service </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Achievements')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Achievements"> <i class="fa fa-trophy" aria-hidden="true"></i> Achievements </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Team')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Team"> <i class="fas fa-user-alt    "></i> Team </a></li>



                    <li><a href="javascript:void(0)" onclick="clickedBtn('Email-Sender')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Email-Sender"><i class="fas fa-mail-bulk"></i> Email Sender </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Email-List')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Email-Sender"> <i class="fa fa-list" aria-hidden="true"></i> Email List </a></li>

                    <div class="bg-primary block m-10" style="height: 2px;"></div>
                    <p class="normal-tx fw-500 fc-dark-blue">I have done my Work.</p>
                    <li><a href="./actions/Signout.php" class="fc-dark-blue font-poppins fs-20"><i class="fas fa-sign-out-alt    "></i> Sign Out</a></li>
          </div>

     </div>
     <div class="flex p-y-10 bg-clr-4" style="flex-direction:row-reverse;">
          <p class="font-poppins fs-10 m-x-20 fw-600">ADMIN PANEL POWERED BY <a href="https://www.yastiwari.com/">YAS TIWARI</a>.</p>
     </div>
     <script>
          $(document).ready(function() {
               $("#Content").load("./include/<?php echo $content; ?>.php");
          });

          function clickOn(elementId) {
               $(`#${elementId}`).toggleClass("none");
          }

          function clickedBtn(btnClicked) {
               $(`#Content`).load(`./include/${btnClicked}.php`);
               clickOn('side-menu');
          }

          function loadContent(e) {
               $(`#Content`).load(`./include/${e}.php`);
          }

          function editLoad(e, f) {
               $(`#Content`).load(`./include/${e}.php?id=${f}`);
          }
     </script>
</body>

</html>