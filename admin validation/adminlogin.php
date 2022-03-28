
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="adminlogin.css">
	<title>Login Page</title>
</head>

<body>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id, username FROM tb_customer WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $username = $row['username'];
        $_SESSION['username'] = $username;

        header("location: welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

	<form action="validate.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"	name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password" name="password" value="">
			</div>

			<input class="button" type="submit"	name="login" value="Sign In">
		</div>
	</form>
</body>

</html>
