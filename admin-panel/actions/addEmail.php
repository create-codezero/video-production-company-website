<?php
session_start();
require_once "../../connect/connectDb/config.php";

// Checking admin
if (!isset($_SESSION['admin-panel'])) {
     header('location: ../admin-login.php');
}

// Error Array initialization
$errors = array();

// Checking post Submit
if (isset($_POST['Add_Email'])) {
     //simple text Input

     $email = mysqli_escape_string($link, htmlentities($_POST['email']));
     $name = mysqli_escape_string($link, htmlentities($_POST['name']));

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_email_list`(`name`, `email`, `addedTime`) VALUES ('$name','$email','$dateTime') ";

     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}
header('location: ../');
