<?php

session_start();


$username = "";
$real_name    = "";
$errors = array();

include('config.php');


if (isset($_POST['reg_user'])) {
  
  $username = mysqli_real_escape_string($db_handler, $_POST['username']);
  $real_name = mysqli_real_escape_string($db_handler, $_POST['real_name']);
  $password_1 = mysqli_real_escape_string($db_handler, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db_handler, $_POST['password_2']);

  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($real_name)) { array_push($errors, "Your name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR real_name='$real_name' LIMIT 1";
  $result = mysqli_query($db_handler, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO user (username, real_name, password)
  			  VALUES('$username', '$real_name', '$password')";
  	mysqli_query($db_handler, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db_handler, $_POST['username']);
  $password = mysqli_real_escape_string($db_handler, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db_handler, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>