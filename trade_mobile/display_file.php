<?php
	include 'data_access_helper.php';
		$key = $_GET["keyword"];
	$db = new DataAccessHelper;
	$db->connect();
	$tmp = $db->executeQuery("SELECT * FROM _product");
	if(mysqli_num_rows($tmp) > 0){

		while($row = mysqli_fetch_assoc($tmp)){
			echo $row["imglink"];
		}
	} else{
		echo "0 results";
	}
	$db->close();
	echo "Inserted 1 record to db";
?>