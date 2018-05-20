<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "main_db";

$con = mysqli_connect($host,$user,$password,$db);
 
$message1=$_POST['msg'];
$message2="ADMIN";
$message=$message2.':'.$message1;
$sql = "Insert into `messages` VALUES ('".$message."')";
  
 $result = mysqli_query($con,$sql);

  if($result)
  {
	echo "<p>Message Sent</p>";

}	
else
{
 echo mysqli_error ($connect);
}

?>
