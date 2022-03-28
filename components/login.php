<?php
   include("../database/connection.php");
   session_start();
//    $user_check = $_SESSION['login_user'];
   
//    $ses_sql = mysqli_query($conn,"select Username from tb_customer where Username = '$user_check' ");
   
//    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
//    $login_session = $row['Username'];
   
//    if(!isset($_SESSION['login_user'])){
//       header("location:login.php");
//       die();
//    }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
      
      $sql = "SELECT * FROM tb_customer WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);



	//   if(!$result){
		
	// 		printf("Error: %s\n", mysqli_error($conn));
	// 		exit();
	//   }



	
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

                $_SESSION['user_type']= $row['user_type'];
        

         $_SESSION['login_user'] = $myusername; 
         if($_SESSION['user_type']=="admin"){
         header("location: ../admin validation/admindashboard.php");
         }elseif($_session['user_type']=="user"){
            header("location:./home.php");
         }

      }else {
         $error = "Your Login Name or Password is invalid";
      
	}
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>