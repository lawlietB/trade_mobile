<?php
	include 'data_access_helper.php';
	include('simplehtmldom_1_5/simple_html_dom.php');
	//lay thong tin khach hang
	$seller_name = $_POST["nameseller"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	
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
		
		//$image = $_FILES['imglink']['name'];
		//$fp      = fopen($image, 'r');
		//$content = fread($fp, filesize($image));
		//$image = addslashes($content);
		//fclose($fp);
	$image =addslashes(file_get_contents($_FILES['imglink']['tmp_name']));
		
	//kiem tra thong tin
	if(isset($_POST['submit'])){
		if($image == NULL || $seller_name == NULL || $phone == NULL || $email == NULL || $address == NULL || $phonename == NULL ||$brand == NULL ||$price == NULL){
			echo "Data is Null";
			die();
	}	}
	

		$db = new DataAccessHelper;
		$db->connect();
		$db->executeQuery("INSERT INTO product(idphone,phonename,brand,price,quality,age,imglink) values ('$idphone','$phonename','$brand','$price','$quality','$age','$image')");
		$db->executeQuery("INSERT INTO seller(name,phone,email,address,idphone) values ('$seller_name','$phone','$email','$address','$idphone')");
		$db->close();
		echo "Inserted 1 record to db";
		return require("seller.html");

?>