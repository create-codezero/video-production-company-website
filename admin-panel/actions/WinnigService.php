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
if (isset($_POST['Add_Winning_Service'])) {
     //simple text Input

     $iconclass = mysqli_escape_string($link, htmlentities($_POST['iconclass']));
     $subtitle = mysqli_escape_string($link, htmlentities($_POST['subtitle']));
     $title = mysqli_escape_string($link, htmlentities($_POST['title']));
     $description = mysqli_escape_string($link, htmlentities($_POST['description']));
     $buttontext = mysqli_escape_string($link, htmlentities($_POST['buttontext']));
     $buttonlink = mysqli_escape_string($link, htmlentities($_POST['buttonlink']));

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = "INSERT INTO `shabd_winning_services`(`iconClass`, `subTitle`, `title`, `description`, `buttonText`, `buttonLink`, `addedTime`) VALUES ('$iconclass','$subtitle','$title','$description','$buttontext','$buttonlink','$dateTime')";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}

if (isset($_POST['Update_Winning_Service'])) {
     //simple text Input

     $winningServiceId = mysqli_escape_string($link, htmlentities($_POST['winningServiceId']));
     $iconclass = mysqli_escape_string($link, htmlentities($_POST['iconclass']));
     $subtitle = mysqli_escape_string($link, htmlentities($_POST['subtitle']));
     $title = mysqli_escape_string($link, htmlentities($_POST['title']));
     $description = mysqli_escape_string($link, htmlentities($_POST['description']));
     $buttontext = mysqli_escape_string($link, htmlentities($_POST['buttontext']));
     $buttonlink = mysqli_escape_string($link, htmlentities($_POST['buttonlink']));

     //from here the inserting php is starts

     $q = "UPDATE `shabd_winning_services` SET `iconClass`='$iconclass',`subTitle`='$subtitle',`title`='$title',`description`='$description',`buttonText`='$buttontext',`buttonLink`='$buttonlink' WHERE `id` = '$winningServiceId'";


     //firing the query 

     mysqli_query($link, $q);

     // header('location: ../');
}

header('location: ../');
