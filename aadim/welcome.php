<?php
   include('session.php');


?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

      <?php
//var_dump($_SESSION);
      if($_SESSION['role']=="admin"){
        echo "<br>you can add user";
      }else{
            echo "<br>you can only view user";
      }
      
      ?>
   </body>
   
</html>