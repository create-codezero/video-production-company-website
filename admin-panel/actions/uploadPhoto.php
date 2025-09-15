<?php
session_start();
require_once "../../connect/connectDb/config.php";
// Checking admin
if (!isset($_SESSION['admin-panel'])) {
     header('location: ../admin-login.php');
}
$errors = array();
if (isset($_POST['Upload_Photo'])) {
     //this is for simple text upload

     $photoTitle = mysqli_escape_string($link, htmlentities($_POST['photoTitle']));

     //this is for the Photo upload

     $photo_name = $_FILES['photoFile']['name'];
     $photo_name = str_replace(' ', '-', $photo_name);
     $photo_tempname = $_FILES['photoFile']['tmp_name'];
     $photo_folder = "../../img/gallery/" . $photo_name;
     move_uploaded_file($photo_tempname, $photo_folder);

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_gallery`(`galleryPhotoTitle`, `galleryPhoto`, `addedTime`) VALUES ('$photoTitle','$photo_name','$dateTime') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}

header('location: ../');
