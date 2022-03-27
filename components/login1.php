<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			text-align: center;	
		}
		.field{
			margin-bottom: 20px;
		}
		.form-group select{
			align-items: center;
		}
	</style>
</head>
<body>
	<h2>Login Form</h2>

	<?php
		session_start();
	?>
	<link rel="stylesheet" href="./css/signup.css"/>
	<p style="color:red;text-align:center;font-size:15px;font-weight:bold">
        <?php
            if(isset($_SESSION['checkUserP'])){
                echo $_SESSION['checkUserP'];
                unset($_SESSION['checkUserP']);
                session_destroy();
            }
        ?>
        </p>



	<div class="form-group">
		<form action="database/database-for-login.php" method="post">
			<input type="text" class="field" name="Username"  required=""><br/>
            <input type="password" class="field" name="Password" placeholder="Password" required=""><br/>
			<label for="Roles">
			<select name="Roles" id="Roles"class="field"  required="">
				<option value="select Roles" selected>select role</option>
				<option value="select">admin</option>
				<option value="select">user</option>
			</label><br><br>
			<br><br><div class="action-s">
            <input type="submit" class="field" name="login" value="Login">&nbsp;&nbsp;
			<label for="signup">
				<a href="signup.php"><input type="button" name="signup" value="signup"></a>
			</label>
		</div>
		</form>
	</div>


