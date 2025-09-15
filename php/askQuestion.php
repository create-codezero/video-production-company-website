<?php
session_start();
require_once "../connect/connectDb/config.php";

$errors = array();
if (isset($_POST['ask'])) {
     //this is for simple text upload

     $name = mysqli_escape_string($link, htmlentities($_POST['name']));
     $email = mysqli_escape_string($link, htmlentities($_POST['email']));
     $question = mysqli_escape_string($link, htmlentities($_POST['question']));

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_user_asked`(`userName`, `userEmail`, `askedQuestion`, `askedTime`) VALUES ('$name','$email','$question','$dateTime') ";

     //firing the query 

     $fireq = mysqli_query($link, $q);
     if ($fireq) {
?>
          <!DOCTYPE html>
          <html lang="en" data-theme="shabd">

          <head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Thanks for Asking</title>

               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
               <link rel="stylesheet" href="../css/<?php echo $cssfile; ?>" />
          </head>

          <body>

               <div class="flex e-c h-100vh">

                    <div class="tx-center p-y-20" style="max-width:600px; width:90%;">
                         <h1 class="m-y-30">Thanks for Asking.</h1>
                         <h4 class="m-b-20">Your Question has been sent. We will send you answer through email.</h4>
                         <a class="btn btn-gra-purple m-auto" title="HomePage" href="../"> Go to Home </a>
                    </div>

               </div>

          </body>

          </html>
<?php
     } else {
          echo "Something Went Wrong.";
     }
} else {
     header('location: ../');
}
?>