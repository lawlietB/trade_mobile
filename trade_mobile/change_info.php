<?php
session_start();
$username = $_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("trademobile");
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	mysql_query("UPDATE _user SET phone='$phone' WHERE username='$username'");
	mysql_query("UPDATE _user SET email='$email' WHERE username='$username'");
	mysql_query("UPDATE _user SET address='$address' WHERE username='$username'");
	mysql_query("UPDATE _user SET username='$name' WHERE username='$username'");
	mysql_query("UPDATE _trade SET username='$name' WHERE username='$username'");
}
header('Location:myaccount.php');
?>