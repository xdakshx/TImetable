<?php
include('session.php');
?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "main_db";
$con = mysqli_connect($host,$user,$password,$db);
$message1=$_POST['msg'];
$message2=$login_session;
$message =$message2.':'.$message1;
//$sql = "Insert into `messages` VALUES ('".$message2.':'.$message1."')";
$sql = "Insert into `messages` VALUES ('".$message."')";

$result = mysqli_query($con,$sql);

  if($result)
  {
	echo "<p>Message Sent</p>";
	header('Location: profile.php');
}	
else
{
 echo mysqli_error ($connect);
}

?>
