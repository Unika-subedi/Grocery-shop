<?php 
session_start();
include '../database/connection.php';

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['Username']);
	
	$password_1  =  e($_POST['Password_1']);
	$password_2  =  e($_POST['Password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['register_btn'])) {
			
			$query = "INSERT INTO tb_customer (Username,user_type, Password) 
					  VALUES('$username', 'user', '$password')";
			mysqli_query($conn, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($conn);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: home.php');				
		
	}
}

// // return user array from their id
// function getUserById($id){
// 	global $conn;
// 	$query = "SELECT * FROM tb_customer WHERE id=" . $id;
// 	$result = mysqli_query($conn, $query);

// 	$user = mysqli_fetch_assoc($result);
// 	return $user;
// }

// escape string
function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
	// if(!mysqli_real_escape_string)
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
// }	

// function isLoggedIn()
// {
// 	if (isset($_SESSION['user'])) {
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

// // call the login() function if register_btn is clicked
// if (isset($_POST['login_btn'])) {
// 	login();
// }

// // LOGIN USER
// function login(){
// 	global $conn, $username, $errors;

// 	// grap form values
// 	$username = e($_POST['Username']);
// 	$password = e($_POST['Password']);

// 	// make sure form is filled properly
// 	if (empty($username)) {
// 		array_push($errors, "Username is required");
// 	}
// 	if (empty($password)) {
// 		array_push($errors, "Password is required");
// 	}

// 	// attempt login if no errors on form
// 	if (count($errors) == 0) {
// 		$password = md5($password);

// 		$query = "SELECT * FROM tb_customer WHERE Username='$username' AND Password='$password' LIMIT 1";
// 		$results = mysqli_query($conn, $query);

// 		if (mysqli_num_rows($results) == 1) { // user found
// 			// check if user is admin or user
// 			$logged_in_user = mysqli_fetch_assoc($results);
// 			if ($logged_in_user['user_type'] == 'admin') {

// 				$_SESSION['user'] = $logged_in_user;
// 				$_SESSION['success']  = "You are now logged in";
// 				header('location: admin/home.php');		  
// 			}else{
// 				$_SESSION['user'] = $logged_in_user;
// 				$_SESSION['success']  = "You are now logged in";

// 				header('location: ./home.php');
// 			}
// 		}else {
// 			array_push($errors, "Wrong username/password combination");
// 		}
// 	}
// }

// function isAdmin()
// {
	
// 	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
// 		return true;
// 	}else{
// 		return false;
// 	}
}