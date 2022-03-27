<?php 
session_start();

// connect to database
include_once('../database/connection.php');

// variable declaration
$Username = "";
$Password    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $Username;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$Username    =  e($_POST['Username']);
	$user_type   =  e($_POST['user_type']);
	$Password_1  =  e($_POST['Password_1']);
	$Password_2  =  e($_POST['Password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($Username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($user_type)) { 
		array_push($errors, "role is required"); 
	}
	if (empty($Password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($Password_1 != $Password_2) {
		array_push($errors, "The two Passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$Password = md5($Password_1);//encrypt the Password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO tb_customer (Username, user_type, Password) 
					  VALUES('$Username', '$user_type', '$Password')";
			mysqli_query($conn, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO tb_customer (Username, user_type, Password) 
					  VALUES('$Username', 'user', '$Password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($conn);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM tb_customer WHERE id=" . $id;
	$result = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $conn, $Username, $errors;

	// grap form values
	$Username = e($_POST['Username']);
	$Password = e($_POST['Password']);

	// make sure form is filled properly
	if (empty($Username)) {
		array_push($errors, "Username is required");
	}
	if (empty($Password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$Password = md5($Password);

		$query = "SELECT * FROM tb_customer WHERE Username='$Username' AND Password='$Password' LIMIT 1";
		// $results = mysqli_query($conn, $query);

		if (mysqli_num_rows(mysqli_query($conn, $query)) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc(mysqli_query($conn, $query));
			
			if ($logged_in_user['user_type'] == 'Admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			// array_push($errors, "Wrong Username/Password combination");
			var_dump($logged_in_user);
		}
	}
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}