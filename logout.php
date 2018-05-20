<?php
session_start();
include('session.php');
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
if(session_destroy()) // Destroying All Sessions
{
	$online="UPDATE `login` set status = 0 where username='$login_session'";
	$result=mysqli_query($conn,$online);
header('Location: index2.php'); // Redirecting To Home Page
exit;
}
?>