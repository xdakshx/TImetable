<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn =mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = "select username from login where username='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	$login_session =$row['username'];
if(!isset($login_session)){
header('Location: index2.php'); // Redirecting To Home Page
exit;
}
}
$conn->close();
?>