<?php
mysql_connect("localhost","root","");
mysql_select_db("trademobile");

if(isset($_GET['submit'])){
	$id = $_GET['submit'];
	mysql_query("DELETE FROM _trade WHERE _trade.idphone='$id'");
	mysql_query("DELETE FROM _product WHERE _product.idphone='$id'");
	echo "<script>alert('Data has deleted')</script>";
	sleep(1);
	header('Location:myaccount.php');
}
?>