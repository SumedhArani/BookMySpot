<?php

$user='root';
$pass='';
$dbname='bookmyspot';
$con=mysqli_connect("localhost",$user,$pass,$dbname);
mysqli_select_db($con,$dbname);

// simple functional case
// $lot_id=$_POST["lot_id"];
$lot_id=1;

$bay_id=$_POST["bay_id"];
$user_id=$_POST["user_id"];

$vehicle=$_POST["vehicle"];
$arrival_time=$_POST["arrival_time"];
$end_time=$_POST["end_time"];

$sql="INSERT INTO reserves(vehicle_type, start_time, end_time, consumer_id, bay_id, lot_id) VALUES ('$vehicle', '$arrival_time', '$end_time', '$user_id', '$bay_id', '$lot_id')";

$result=mysqli_query($con, $sql);

if($result)
{
	echo "success";
}
else
{
	echo "fail";
	echo $con->error;
}

mysqli_close($con);

// print_r($_POST);

?>
