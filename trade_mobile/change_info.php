<?php
session_start();
include 'data_access_helper.php';
$username = $_SESSION['username'];
$db = new DataAccessHelper;
	$db->connect();
if(isset($_POST['submit'])){
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	//kiem tra email
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
        echo "<script> alert('Email is not Invalid. Please fill other email');</script>";
		$check_mail = 1;
    }

	//Kiểm tra phone đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(phone) FROM _user WHERE phone='$phone'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(phone)'] > 0){
        echo "<script> alert('Phone has already created. Please fill other phone');</script>";
		$check_phone = 1;
    }
	
	//Kiểm tra email đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(email) FROM _user WHERE email='$email'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(email)'] > 0){
        echo "<script> alert('Email has already created. Please fill other email');</script>";
		$check_mail = 1;
    }
		if($check_phone == 1){}
		else{
			mysql_query("UPDATE _user SET phone='$phone' WHERE username='$username'");}
		if($check_mail == 1){}
		else{
			mysql_query("UPDATE _user SET email='$email' WHERE username='$username'");
		}
		mysql_query("UPDATE _user SET address='$address' WHERE username='$username'");	
}
$db->close();
header('Location:myaccount.php');
?>