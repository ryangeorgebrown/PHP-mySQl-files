<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from userinfo";

$result = $conn->query($sql);
$jsonOutput = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $jsonOutput[] = $row;
    }
} else {
    echo "0 results";
}

echo json_encode( $jsonOutput);
$conn->close();
?>







