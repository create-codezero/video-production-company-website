<?php
session_start();
require_once "../../connect/connectDb/config.php";

// Checking admin
if (!isset($_SESSION['admin-panel'])) {
     header('location: ../admin-login.php');
}

$errors = array();
if (isset($_POST['Upload_Brand'])) {
     //this is for simple text upload

     $brandTitle = mysqli_escape_string($link, htmlentities($_POST['brandTitle']));

     //this is for the Photo upload

     $brand_logo_name = $_FILES['brandFile']['name'];
     $brand_logo_name = str_replace(' ', '-', $brand_logo_name);
     $logo_tempname = $_FILES['brandFile']['tmp_name'];
     $photo_folder = "../../img/brands/" . $brand_logo_name;
     move_uploaded_file($logo_tempname, $photo_folder);

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_brands`(`brandName`, `brandImage`, `addedTime`) VALUES ('$brandTitle','$brand_logo_name','$dateTime') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}

header('location: ../');
