<?php
	include 'data_access_helper.php';
	$db = new DataAccessHelper;
	$db->connect();
	//lay thong tin khach hang
	$user_name = $_POST["name"];
	$password =$_POST["password"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$fail = 0;
	//kiem tra thong tin
	if(isset($_POST['submit'])){
		if($user_name == NULL || $phone == NULL || $email == NULL || $address == NULL ||$password == NULL){
			echo "<script> alert('Data is null!');</script>";
			$fail = 1;
		}
	}
	//Kiem tra trung lap du lieu
	$check = $db->executeQuery("SELECT count(username) FROM _user WHERE username = '$user_name'");
	$row = mysqli_fetch_assoc($check);
	if($row['count(username)'] > 0){
			echo "<script> alert('This account has already created!');</script>";
			$fail = 1;
	}
	
	//kiem tra email
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
        echo "<script> alert('Email is not Invalid. Please fill other email');</script>";
		$fail = 1;
    }
	
	//kiem tra phone
	if(!eregi("^[_0-9-]+$", $phone)){
        echo "<script> alert('Phone is not Invalid. Please fill other phone');</script>";
		$fail = 1;
    }

	//Kiểm tra phone đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(phone) FROM _user WHERE phone='$phone'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(phone)'] > 0){
        echo "<script> alert('Phone has already created. Please fill other phone');</script>";
		$fail = 1;
    }
	
	//Kiểm tra email đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(email) FROM _user WHERE email='$email'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(email)'] > 0){
        echo "<script> alert('Email has already created. Please fill other email');</script>";
		$fail = 1;
    }
			if($fail == 0){
				$db->executeQuery("INSERT INTO _user(username, password, phone, email, address) values ('$user_name','$password','$phone','$email','$address')");
				$db->close();
				echo "<script>You have registered successfully</script>";
				require('login.html');
				
			}
			else{
				$db->close();
				require('signup.html');
			}
		

?>
