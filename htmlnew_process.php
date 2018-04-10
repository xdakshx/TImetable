
<?php
 
 
$host = "localhost";
$user = "root";
$password = "";
$db = "main_db";

$con = mysqli_connect($host,$user,$password,$db);
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department_name=$_POST['department'];
$select_subject=$_POST['select'];
//Execute the query
 
 
$sql = "Insert into `teacher_html` VALUES ('".$first_name."','".$last_name."','".$department_name."','".$select_subject."') ";
  
 $result = mysqli_query($con,$sql);

  if($result)
  {
	echo "1";
	echo "<p>Employee Added</p>";

}	
else
{
echo "0";
 echo "Employee NOT Added<br />";
 echo mysqli_error ($connect);
}

?>
