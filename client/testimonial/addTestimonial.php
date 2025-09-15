<?php
session_start();
require_once "../../connect/connectDb/config.php";

$errors = array();
if (isset($_POST['Add_Testimonial'])) {
     //this is for simple text upload

     $name = mysqli_escape_string($link, htmlentities($_POST['name']));
     $position = mysqli_escape_string($link, htmlentities($_POST['position']));
     $position = strtoupper($position);
     $description = mysqli_escape_string($link, htmlentities($_POST['description']));
     $rating = mysqli_escape_string($link, htmlentities($_POST['rating']));

     //this is for the Photo upload

     $photo_name = $_FILES['profile']['name'];
     $photo_name = str_replace(' ', '-', $photo_name);
     $photo_tempname = $_FILES['profile']['tmp_name'];
     $photo_folder = "../../img/testimonial/" . $photo_name;
     move_uploaded_file($photo_tempname, $photo_folder);

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_testimonial`(`testimonialName`, `testimonialPosition`, `testimonialDescription`, `testimonialRating`, `testimonialProfile`, `addedTime`) VALUES ('$name','$position','$description','$rating','$photo_name','$dateTime') ";


     //firing the query 

     mysqli_query($link, $q);

     echo '
     <!DOCTYPE html>
     <html lang="en" data-theme="shabd">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Testimonial Submitted</title>
          <link rel="stylesheet" href="../../css/<?php echo $cssfile; ?>">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     </head>

     <body>
          <div class="flex flex-d-column tx-center e-c p-y-30">
               <p class="fs-40">Thanks for Submitting Testimonial.</p>
          </div>

          <script>
               alert("Thanks for Submitting Testimonial.");

               setTimeout(function(){
                    window.location.href = ' . "'../..'" . ';
               },5000);
          </script>
     </body>
     </html>
     ';
} else {
     header('location: ../../');
}
