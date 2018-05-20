<?php
session_start(); // Starting Session
$error=""; // Variable To Store Error Message
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";
$conn =mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
  
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo "<script type='text/javascript'>alert('$error');</script>";
}
else if($_POST['username']=='admin')
{
	header("location: admin_work.php");
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "select * from login where password='$password' AND username='$username'" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$online="UPDATE `login` set status = 1 where username='$username' AND password='$password'";
	$result=mysqli_query($conn,$online);
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo nl2br("Sorry Account ' " .$username. " ' does not exist.\n");
echo "Username ".$username." is Available go to Login page to create account with this Username :)";

}
$conn->close();
}
}
?>