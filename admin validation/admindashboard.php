<?php
    session_start();
    error_reporting(0);
    if(!isset($_SESSION['username'])) //you can add more checks
{
   header('Location: ../components/login.php');
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>vegetable delivery system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="./css/admindashboard.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>

<body>
    <header class="header">
        <div class="brand-logo">
            vegetable&nbsp;<span>delivery</span>    
        </div>

        <input type="checkbox" id="toggle-btn">
        <!-- <label for="toggle-btn" class="show-menu-btn"><i class="fas fa-bars"></i></label> -->

        <nav>
            <ul class="navigation-p">
                <li><a href="./welcome.php" style="font-size:15px"> Dashboard</a></li>
                <li><a href="./viewcategory.php"style="font-size:15px"> Categories</a></li>
                <li><a href="./viewproduct.php"style="font-size:15px"> Products</a></li>
                <li><a href="./users.php"style="font-size:15px"> Users</a></li>
                <li><a href="./orders.php"style="font-size:15px"> orders</a></li>
                <li><a href="../components/logout.php"style="font-size:15px"> Log Out</a></li>
                <!-- <label for="toggle-btn" class="hide-menu-btn" id="housee"></label> -->
                
            </ul>
        </nav>
    </header><br><br><br><br><br><br>
    
    <!-- <script type="text/javascript" src="../js/script.js"> -->






