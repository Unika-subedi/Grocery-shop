<?php include'./function.php'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
</head>
<link rel="stylesheet" href="../css/signup.css"/>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php include('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="Username" value="">
	</div>
	<!-- <div class="input-group">
		<label>Roles</label>
		<select name="user_type" id="user_type" >
				<option value="" selected>Select role</option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
	
	</div> -->
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="Password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="Password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>