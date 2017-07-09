<?php
$servername = $_SERVER['RDS_HOSTNAME'].':'.$_SERVER['RDS_PORT'];
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];
$dbname = $_SERVER['RDS_DB_NAME'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from saalimentadores order by codigo desc limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["codigo"]. " - Name: " . $row["name"]. " type " . $row["type"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>