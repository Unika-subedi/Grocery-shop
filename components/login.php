<?php
session_start(); 
include '../database/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['Username'];
    $password = $_POST['Password'];
	$mypassword=md5($password);

    $sql = "SELECT * FROM tb_customer WHERE Username = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);
    
    // var_dump($count);

    if($count == 1) {
		$role = $row['user_type'];
		
		if($role=="user"){
			$_SESSION['username']=$row['Username'];
			header("location: home.php");
		}
		else {
			$_SESSION['username'] = $row['Username'];
			header("location: ../admin validation/admindashboard.php");
		}	
    }else {
		
		echo"
		<script> alert('invalid username!!!');
		window.location.href='login.php';
		</script>";  
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<style>
.error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
  }
</style
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<div class="input-group">
		
		<?php
		// if (count($errors) > 0){
		// 	echo "<div class='error'>";
		// 		foreach ($errors as $error){
		// 			echo $error .'<br>';
		// 		}
		// 	echo '</div>';
		// }
		?>
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