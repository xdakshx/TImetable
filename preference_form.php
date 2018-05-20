<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "main_db";

$con = mysqli_connect($host,$user,$password,$db);
 
$first_name=$_POST['full_name'];
$department_name=$_POST['selectd'];
$select_subject=$_POST['select'];
$labs=$_POST['selectL'];

$sql = "Insert into `teacher_form` VALUES ('".$first_name."','".$department_name."','".$select_subject."','".$labs."') ";
  
 $result = mysqli_query($con,$sql);

  if($result)
  {
	echo "1";
	echo "<p>Form Successfully Submitted</p>";
	header("location: profile.php");
}	
else
{
echo "0";
 echo "An error occured<br />";
 echo mysqli_error ($con);
}
?>
