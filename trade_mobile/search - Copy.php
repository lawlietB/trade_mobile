<?php
	include 'data_access_helper.php';
		$key = $_GET["keyword"];
	$db = new DataAccessHelper;
	$db->connect();
	$tmp = $db->executeQuery("SELECT phonename, price, brand, imglink FROM _product, seller WHERE phonename LIKE '%$key%' && seller.idphone = _product.idphone");
	if(mysqli_num_rows($tmp) > 0){

		while($row = mysqli_fetch_assoc($tmp)){
			echo "<br>";
			echo "<img height='170' src='".$row["imglink"]."'/><br>";
			echo $row["phonename"]." - ".$row["brand"]."<br> Price: $".$row["price"];
		}
	} else{
		echo "0 results";
	}
	
	$db->close();
?>