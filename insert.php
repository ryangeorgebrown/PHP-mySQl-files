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

$sql = "INSERT INTO userinfo (name, amount, description)
VALUES ('Ryan 2', '10340.25', 'My name is ryan and I am a professor at george brown college. My favourite subject is Device Development.')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>