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
      <span class="material-icons-outlined" id="closed">
        menu
        </span>

    <div class="side-nav">

      
        <span class="material-icons-outlined" id="close">
            close
            </span>
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
            
            <a href="#">
                <li><span class="material-icons-outlined">
                        event
                    </span><span class="menu">addproduct</span></li>
            </a>
            

        </ul>

        
    </div>
    <div class="right">
     

<?php
    // include_once('functions.php');
    // session_start();
    ?>

    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <h2><a href = "../components/login.php">Sign Out</a></h2>   

    </div>
    <!-- side navbar ends up here -->
</body>
<script type="text/javascript" src="./admindashboard.js"></script>

</html>