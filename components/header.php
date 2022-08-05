<?php
    // session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>vegetable delivery system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product.css">
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
        <label for="toggle-btn" class="show-menu-btn"><i class="fas fa-bars"></i></label>

        <nav>
            <ul class="navigation-p">
                <li><a href="./home.php"><i class="fas fa-house-damage" id="housee"></i> Home</a></li>
                <li><a href="./categories.php"><i class="far fa-image" id="housee"></i> Categories</a></li>
                <?php
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                    }else{
                        $count=0;
                    }
                ?>
                <li><a href="./shopping-cart.php"><i class="fa fa-shopping-basket" id="housee"></i> Cart&nbsp;(<?php echo $count?>)</a></li>
                <!-- <li><a href="#products"><i class="fa fa-shopping-basket" id="housee"></i> Products</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-question"></i> Support</a></li> -->
                <li><a href="#contactus"><i class="fas fa-orders" id="housee"></i> Products </a></li>
                <?php 
                 if(isset($_SESSION['username'])){
                ?>
                <li><a href="./logout.php"><i class="fas fa-user" name="logout"></i> Logout</a></li>
                <?php
                 }
                 else{?>
                 <li><a href="./logout.php"><i class="fas fa-user" name="logout"></i> Login / Sign Up</a></li>
                 <?php
                 }
                 ?>
                <label for="toggle-btn" class="hide-menu-btn" id="housee"><i class="fas fa-times"></i></label>
                
            </ul>
        </nav>
    </header><br><br><br><br><br><br>





