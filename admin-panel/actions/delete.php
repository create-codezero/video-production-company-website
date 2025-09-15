<?php
session_start();
require_once "../../connect/connectDb/config.php";
// Checking admin
if (!isset($_SESSION['admin-panel'])) {
     header('location: ../admin-login.php');
}
if (!isset($_GET['id']) && !isset($_GET['db']) && empty($_GET['id']) && empty($_GET['bd'])) {
     header('location: ../');
} else {
     if ($_GET['db'] == "services") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_services` WHERE `serviceId` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else if ($_GET['db'] == "testimonial") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_testimonial` WHERE `testimonialId` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else if ($_GET['db'] == "faq") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_faq` WHERE `faqId` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else if ($_GET['db'] == "winningServices") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_winning_services` WHERE `id` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else if ($_GET['db'] == "team") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_team` WHERE `memberId` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else if ($_GET['db'] == "email") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_email_list` WHERE `id` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else if ($_GET['db'] == "projects") {
          $id = mysqli_escape_string($link, $_GET['id']);

          $q = "DELETE FROM `shabd_projects` WHERE `projectId` = '$id'";
          $fireq = mysqli_query($link, $q);

          if ($q) {
               header('location: ../');
          } else {
               echo "Something went Wrong!";
          }
     } else {
          header('location: ../');
     }
}
header('location: ../');
