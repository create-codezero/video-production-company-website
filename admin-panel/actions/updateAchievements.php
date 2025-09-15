<?php
session_start();
require_once "../../connect/connectDb/config.php";

// Checking admin
if (!isset($_SESSION['admin-panel'])) {
     header('location: ../admin-login.php');
}
// Error Array initialization
$errors = array();


if (isset($_POST['Update_Achievements'])) {
     //simple text Input

     $achievementId = mysqli_escape_string($link, htmlentities($_POST['achievementId']));


     $title1 = mysqli_escape_string($link, htmlentities($_POST['title1']));
     $number1 = mysqli_escape_string($link, htmlentities($_POST['number1']));

     $title2 = mysqli_escape_string($link, htmlentities($_POST['title2']));
     $number2 = mysqli_escape_string($link, htmlentities($_POST['number2']));


     $title3 = mysqli_escape_string($link, htmlentities($_POST['title3']));
     $number3 = mysqli_escape_string($link, htmlentities($_POST['number3']));

     $title4 = mysqli_escape_string($link, htmlentities($_POST['title4']));
     $number4 = mysqli_escape_string($link, htmlentities($_POST['number4']));

     //from here the inserting php is starts

     $q = "UPDATE `shabd_achievement` SET `achievement1Title`='$title1',`achievement1Num`='$number1',`achievement2Title`='$title2',`achievement2Num`='$number2',`achievement3Title`='$title3',`achievement3Num`='$number3',`achievement4Title`='$title4',`achievement4Num`='$number4' WHERE `achievementId` = '$achievementId'";


     //firing the query 

     mysqli_query($link, $q);

     // header('location: ../');
}

header('location: ../');
