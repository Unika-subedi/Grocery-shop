<?php
include('admindashboard.php');
include '.logincheck.php';
?>

    <link rel="stylesheet" href="./css/home.css"/>
     
 <div class="content">
    <div class="welcome-header">
    <div style="text-color:lightblue;">
      <h1> Hello! &nbsp; 
      
    <?php echo $_SESSION['username'];?>
    
    </h1>
    </div>
    <h2>Welcome to Admin Dashboard.
</h2>

    </div>
    </div>
  