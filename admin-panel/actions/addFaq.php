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
if (isset($_POST['Add_Faq'])) {
     //simple text Input

     $question = mysqli_escape_string($link, htmlentities($_POST['question']));
     $answer = mysqli_escape_string($link, htmlentities($_POST['answer']));

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_faq`(`faqQuestion`, `faqAnswer`, `faqAddedTime`) VALUES ('$question', '$answer', '$dateTime') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}
header('location: ../');
