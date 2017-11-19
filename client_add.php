<?php

include 'connect_to_db.php';
	if(isset($_POST['name']))
		$mallname = $_POST['name'];
	else
		echo "Enter name";
	if(isset($_POST['address']))
		$address = $_POST['address'];
	else
		echo "Enter address";
	if(isset($_POST['type']))
		$type = $_POST['type'];
	else
		echo "Enter type";
	if(isset($_POST['rate']))
		$rate = $_POST['rate'];
	else
		echo "Enter rate";
   
   
   $sql = mysqli_query($con,"INSERT INTO client(client_id,name,address,type,rate)
				VALUES('101','$mallname','$address','$type', '$rate')");
				
	if($sql)
		echo "Mall added";
	else
		echo "Mall not added";
	
?>	