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
if (isset($_POST['Add_Service'])) {
     //simple text Input

     $name = mysqli_escape_string($link, htmlentities($_POST['name']));
     $description = mysqli_escape_string($link, htmlentities($_POST['description']));
     $startAt = mysqli_escape_string($link, htmlentities($_POST['startAt']));

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_services`(`serviceName`, `serviceDescription`, `serviceStartAt`, `serviceAddedTime`) VALUES ('$name', '$description', '$startAt', '$dateTime') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}

if (isset($_POST['Update_Service'])) {
     //simple text Input

     $serviceId = mysqli_escape_string($link, htmlentities($_POST['serviceId']));
     $name = mysqli_escape_string($link, htmlentities($_POST['name']));
     $description = mysqli_escape_string($link, htmlentities($_POST['description']));
     $startAt = mysqli_escape_string($link, htmlentities($_POST['startAt']));

     //from here the inserting php is starts

     $q = " UPDATE `shabd_services` SET `serviceName`='$name',`serviceStartAt`='$startAt',`serviceDescription`='$description' WHERE `serviceId` = '$serviceId' ";

     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}
header('location: ../');
