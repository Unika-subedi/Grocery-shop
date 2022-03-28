 <?php
//   if (!($_SESSION['user_type']=="admin" )) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: ../admin validation/admindashboard.php');
// }
// elseif(!$_SESSION['user_type']=="user"){
//     header('location: ./home.php');
// }

// if (isset($_GET['logout'])) {
// 	session_destroy();
// 	unset($_SESSION['user']);
// 	header("location: ./login.php");
// } ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side nav bar</title>
    <!-- for google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="./admindashboard.css">
  
</head>

<body>
      

    <div class="side-nav">
        <div class="navigation">

<!--       
        <span class="material-icons-outlined" id="close">
            close
            </span> -->
        <header>vegetable Delivery</header>
        <ul>
            <a href="#welcome" class="active">
                <li><span class=" material-icons-outlined">
                        home
                    </span> <span class="menu">Home</span> </li>
            </a>
            <a href="#">
                <li><span class="material-icons-outlined">
                        dashboard
                    </span><span class="menu">Dashboard</span></li>
            </a>
            <a href="#">
                <li><span class="material-icons-outlined">add_shopping_cart
                       
                    </span><span class="menu">order</span></li>
            </a>

            

        </ul>
       </div>
       <div class="nav-left">
            <p> welcome to admin panel </p>
     

<?php
    // include_once('functions.php');
    // session_start();
    ?>

    <h1>Welcome Parbat</h1>
    <h2><a href = "../components/login.php">Sign Out</a></h2>   

    </div>
    <!-- side navbar ends up here -->
    </div>
</body>
<!-- <script type="text/javascript" src="./admindashboard.js"></script> -->

</html>