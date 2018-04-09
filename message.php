 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";

$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from messages";
$result = $conn->query($sql);
echo "<table border='10'>
<tr>
<th>Communication Logs</th>
</tr>";
if ($result->num_rows > 0) 
{

    while($row = $result->fetch_assoc()) 
	{
        echo "<tr>";
echo "<td>" . $row['message'] . "</td>";
echo "</tr>";
		echo "<br>";
    }
}
 else 
{
  echo "0 results";
}
$conn->close();
echo "<input type=\"text\" id=\"msg\" width=\"80\">";
echo "<input type=\"submit\" value=\"Send Message\">";
?> 