<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php");

}
?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<title>Login Form in PHP with Session</title>
</head>
<body>

<div class="header">
<center>
<h3>Calendario</h3>
</center>
</div>

<center>
<div id="main">
<div id="login">

<form action="login.php" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">&nbsp
<input name="submit" type="submit" value=" Login "><br>
<span><?php echo $error; ?></span>
<a href="https://mail.google.com">Contact Administrator for Account Issues </a>
</form>
</div>
</div><br><br><br><br><br><br>
</center>
<hr>
<p align="center">Minor Project by 1506415 | 1506224 | 1506413 | 1506254 | 1506056</p>
</body>
</html>