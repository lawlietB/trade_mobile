<?php
	session_start();
	include 'data_access_helper.php';
	$db = new DataAccessHelper;
	$db->connect();
	$username = $_POST["name"];
	$password =$_POST["password"];
	//Kiem tra
	if($username == NULL || $password == NULL){
		echo "<script>alert('Username or password is not invalid!')</script>";
		require 'login.html';
	}
	//check username exist
	$check = $db->executeQuery("SELECT count(username) FROM _user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($check);
	if($row['count(username)'] == 0){
			echo "<script>alert('Username is not exist. Please try again!')</script>";
			require 'login.html';
	}
	
	//check correct password
	$check = $db->executeQuery("SELECT password FROM _user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($check);
	if($password != $row['password']){
		echo "<script>alert('Password is wrong, please try again!')</script>";
			require 'login.html';
	}
	else{
	$_SESSION['username'] = $username;
	echo "<script>alert('You log in success')</script>";
	header('Location:index.php');
	}
	
?>