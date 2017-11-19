<?php
session_start();
$user='root';
$pass='';
$dbname='bookmyspot';
$con=mysqli_connect("localhost",$user,$pass,$dbname);	
mysqli_select_db($con,$dbname);

$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT username,passwd FROM consumer WHERE username='$username'";
//$result = $con->query($sql);
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
if($row['passwd']==$password)
{
	//echo $password;
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	echo "<script type='text/javascript'>
window.location.href = 'loggedindex.php';
</script>";
}
else
{
	//echo $password;
	echo "<script type='text/javascript'>
window.location.href = 'loginsignup.php';
</script>";

}
mysqli_close($con);
