<html>
<head>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    width: 100%;
	border:outset;
		border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}

.card:hover {
 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);

}

.container {
    padding: 2px 16px;
	width:100%;

}
</style>
</head>
<body bgcolor="#f2f2f2">
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "main_db";

$con = mysqli_connect($host,$user,$password,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$s=$_POST['select'];
if(strcmp($s, 'Subjects') != 0)
{
$sql = "SELECT * from teacher_form WHERE lab = '$labs' ";  
$sql = "SELECT * from teacher_form WHERE lab = '$s' ";  
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		  echo"<div class='card'>";
		  echo "<br><p style='margin-left:8px;font-family:Georgia;'>";
        echo "Faculty Name: ";echo $row["name"];echo "<br>";
		echo "Department: ";echo $row["department"];echo "<br>";
		echo "Subject:    ";echo $row["subject"];echo "<br>";
		echo "Lab:   	  ";echo $row["lab"];echo "<br>";
		echo "</p><br>";
		echo "</div>&nbsp";
    }       
    }	
	else
	{
		echo "Error Make sure Your Spelling is correct or you have choosen valid subject<br>or There might be no Entries with this subject";
  echo mysqli_error ($con);
	}
}	
else{echo "<script type='text/javascript'>alert('No Subject Selected for query');</script>";}
?>
</body>
</html>
