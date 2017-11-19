<?php

include 'connect_to_db.php';
	if(isset($_POST['mname']))
		$mname = $_POST['mname'];
	else
		echo "Enter parking area name";
	if(isset($_POST['uname']))
		$uname = $_POST['uname'];
	else
		echo "Enter username";
	if(isset($_POST['pword']))
		$pword = $_POST['pword'];
	else
		echo "Enter password";

   	$query = "select client_id from client WHERE username = "."'".$uname."'";
   	$result = mysqli_query($con , $query);

   	while($client = mysqli_fetch_array($result , MYSQLI_ASSOC))
   	{
   		$client_id = $client['client_id'];
   		$sql = "DELETE FROM client WHERE client_id = "."'".$client_id."'";
   		if (mysqli_query($con, $sql)){
    		echo "Record deleted successfully";
		} else {
    		echo "Error deleting record: " . $con->error;
		}

   	}

?>	