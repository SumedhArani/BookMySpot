<<<<<<< HEAD
<?php

$user='root';
$pass='';
$dbname='bookmyspot';
$con=mysqli_connect("localhost",$user,$pass,$dbname);	
mysqli_select_db($con,$dbname);

$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"];
$mobile_number=$_POST["mobile_number"];
$email=$_POST["email"];
$DOB=$_POST["DOB"];
$identity_proof=$_POST["identity_proof"];

$sql="INSERT INTO consumer (username,passwd,name,mobile_number,email,DOB,identity_proof) VALUES ('$username','$password','$name',$mobile_number,'$email','$DOB','$identity_proof')";

$result=mysqli_query($con , $sql);
mysqli_close($con);
echo "<script type='text/javascript'>
window.location.href = 'loginsignup.php';
</script>";

?>
=======
<?php

$user='root';
$pass='';
$dbname='bookmyspot';
$con=mysqli_connect("localhost",$user,$pass,$dbname);	
mysqli_select_db($con,$dbname);

$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"];
$mobile_number=$_POST["mobile_number"];
$email=$_POST["email"];
$DOB=$_POST["DOB"];
$identity_proof=$_POST["identity_proof"];

$sql="INSERT INTO consumer (username,passwd,name,mobile_number,email,DOB,identity_proof) VALUES ('$username','$password','$name',$mobile_number,'$email','$DOB','$identity_proof')";

$result=mysqli_query($con , $sql);
mysqli_close($con);
echo "<script type='text/javascript'>
window.location.href = 'loginsignup.php';
</script>";

?>
>>>>>>> 856cb1f13c77a086e2166fea34d6c0ed4c38e1d0
