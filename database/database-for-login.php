<?php

session_start();
    include("./connection.php");
   if (isset($_POST['login'])) {
   		$Username = $_POST['Username'];
   		$Password = $_POST['Password'];
		$Roles = $_POST['Roles'];

   	   $select = mysqli_query($conn, "SELECT * FROM tb_customer WHERE Username = '$Username' ,Password = '$Password' AND Roles='$Roles'");
   	//    $row = mysqli_fetch_array($select);
       
   	   if(mysqli_num_rows($select)==1){
   	   	$_SESSION["Username"] = $row ['Username'];
   	   	$_SESSION["Password"] = $row ['Password'];
   	   	$_SESSION["Roles"] = $row ['Roles'];
		header("location:../home/home.php");
   	   }   
		//   else{
   	   	// 	echo '<script type = "text/javascript">';
   	   	// 	echo 'alert ("Invalid Username or Password!");';
   	   	// 	echo 'window.location.href = "index.php" ';
   	   	// 	echo '</script>';
   	   	// }
			  else{
				// echo'Invalid username or password!';
				$_SESSION['checkUserP'] = "You username or passsword is incorrect";
                header('location:../login.php');
		  }
   	   }
   	
		  
   
?>