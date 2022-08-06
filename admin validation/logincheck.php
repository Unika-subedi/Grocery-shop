<?php
session_start();
     error_reporting(0);
     if(!isset($_SESSION['username'])) //you can add more checks
 {
    header('Location: ../components/login.php');
    exit();
 }

?>