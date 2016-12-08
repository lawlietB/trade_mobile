<?php
	include 'data_access_helper.php';
	session_start();
	//lay thong tin san pham
	$phonename=$_POST["phonename"];
	$brand=$_POST["type"];
	$price=$_POST["price"];
	//chat luong san pham giam dan tu 1 den 4
	if($_POST["new"] == "new") $quality=1;
	else if($_POST["new"] == ">95%") $quality=2;
	else if($_POST["new"] == ">90%") $quality=3;
	else $quality = 4;
	//thoi gian san pham theo thu tu tu 1 den 6
	if($_POST["age"] == "< 1 month") $age=1;
	else if($_POST["age"] == "< 3 month") $age=2;
	else if($_POST["age"] == "< 6 month") $age=3;
	else if($_POST["age"] == "< 1 year") $age=4;
	else if($_POST["age"] == "< 2 year") $age=5;
	else $age=6;
	//sinh IDPhone bang loai san pham va thoi gian ngay thang tao ra no
	$idphone = substr($brand,0,3).date("ymd").time("hms");
	
	//lay file anh tu may tinh
	move_uploaded_file($_FILES['imglink']['tmp_name'], './image/'.$_FILES['imglink']['name']);
	$image = './image/'.$_FILES['imglink']['name'];
		
	//kiem tra thong tin
	if(isset($_POST['submit'])){
		if($image == './image/' ||$phonename == NULL ||$brand == NULL ||$price == NULL){
			$fail = 1;
		}	
	}
	$iduser = $_SESSION['username'];

	if($fail == 0){
		$db = new DataAccessHelper;
		$db->connect();
		$db->executeQuery("INSERT INTO _product(idphone,phonename,brand,price,quality,age,imglink) values ('$idphone','$phonename','$brand','$price','$quality','$age','$image')");
		$db->executeQuery("INSERT INTO _trade(idphone, username) values ('$idphone','$iduser')");
		$db->close();
		header('Location:index.php');
			
	}
	else{
		header('Location:seller.php');
	}
		

?>