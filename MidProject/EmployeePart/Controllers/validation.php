<?php
include 'login.php';
	$uname = $_POST['uname'];
	$password = $_POST['password'];

	if($uname == ""){
		echo "User name field cannot be empty";
	}elseif ($password == "") {
		echo "password Field Cannot be empty";
	}else{
		if ($uname == $password) {
			header('location: dashboard.php');
		}
		else{
			header('loation: login.php');
		}
	}
?>