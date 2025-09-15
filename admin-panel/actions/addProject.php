<?php
session_start();
require_once "../../connect/connectDb/config.php";
// Checking admin
if (!isset($_SESSION['admin-panel'])) {
     header('location: ../admin-login.php');
}
$errors = array();
if (isset($_POST['Add_Project'])) {
     //this is for simple text upload

     $name = mysqli_escape_string($link, htmlentities($_POST['name']));
     $description = mysqli_escape_string($link, htmlentities($_POST['description']));
     $file = mysqli_escape_string($link, htmlentities($_POST['file']));
     $tags = mysqli_escape_string($link, htmlentities($_POST['tags']));
     $initialDownloadCount = 0;

     //this is for the Photo upload

     $photo_name = $_FILES['photoFile']['name'];
     $photo_name = str_replace(' ', '-', $photo_name);
     $photo_tempname = $_FILES['photoFile']['tmp_name'];
     $photo_folder = "../../img/projects/" . $photo_name;
     move_uploaded_file($photo_tempname, $photo_folder);

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     //from here the inserting php is starts

     $q = " INSERT INTO `shabd_projects`(`projectName`, `projectDescription`, `projectTags`, `projectFile`, `projectPhoto`, `totalDownloads`, `addedTime`) VALUES ('$name','$description','$tags','$file','$photo_name','$initialDownloadCount','$dateTime') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../');
}

header('location: ../');
