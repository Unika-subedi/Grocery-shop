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
	</style>
</head>
<body>
	<h2>Login Form</h2>

	<?php
		session_start();
	?>
	<p style="color:red;text-align:center;font-size:15px;font-weight:bold">
        <?php
            if(isset($_SESSION['checkUserP'])){
                echo $_SESSION['checkUserP'];
                unset($_SESSION['checkUserP']);
                session_destroy();
            }
        ?>
        </p>



<div>
		<form action="database/database-for-login.php" method="post">
			<input type="text" class="field" name="Username" placeholder="Username" required=""><br/>
            <input type="password" class="field" name="Password" placeholder="Password" required=""><br/>
            <input type="submit" class="field" name="login" value="Login">
		</form>
	</div>


