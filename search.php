 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";
//$user = "id4486263_root";
//$password = "12345";
//$db = "id4486263_iot";
// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT status FROM iot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["status"];
    }
} else {
    echo "0 results";
}
$conn->close();
?> 